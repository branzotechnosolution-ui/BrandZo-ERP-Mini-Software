<?php

namespace Modules\Recruit\Notifications;

use App\Models\Currency;
use App\Notifications\BaseNotification;
use Modules\Recruit\Entities\RecruitJobOfferLetter;
use Modules\Recruit\Entities\RecruitSalaryStructure;
use Modules\Recruit\Entities\RecruitSelectedSalaryComponent;
use Modules\Recruit\Http\Controllers\JobOfferLetterController;

class SendOfferLetter extends BaseNotification
{
    private $offer;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(RecruitJobOfferLetter $offer)
    {
        $this->offer = $offer;
        $this->company = $this->offer->job->company;
    }

    /**
     * Build the dompdf instance + filename for the offer letter PDF,
     * reusing the same data the front-end download() action builds.
     * Follows the pattern in Modules/Payroll/Notifications/SalaryStatusEmail.php
     * (via PayrollController::domPdfObjectForDownload).
     *
     * @return array{pdf: \Barryvdh\DomPDF\PDF, fileName: string}
     */
    private function offerLetterPdfObject()
    {
        $offer = RecruitJobOfferLetter::with(['files', 'job', 'jobApplication'])->find($this->offer->id);

        $data = [];
        $data['jobOffer'] = $offer;
        $data['company'] = $this->company;
        $data['settings'] = $this->company;
        $data['currency'] = Currency::where('id', '=', $offer->job->currency_id)->first();

        $salaryStructure = RecruitSalaryStructure::where('recruit_job_offer_letter_id', $offer->id)->first() ?? null;
        $data['salaryStructure'] = $salaryStructure;

        if (! is_null($salaryStructure)) {
            $selectedEarningsComponent = RecruitSelectedSalaryComponent::where('rss_id', $salaryStructure->id)->where('component_type', 'earning')->get();
            $selectedDeductionsComponent = RecruitSelectedSalaryComponent::where('rss_id', $salaryStructure->id)->where('component_type', 'deduction')->get();
            $earn = JobOfferLetterController::totalEarnings($salaryStructure);
            $deduction = JobOfferLetterController::totalDeductions($salaryStructure);
            $total = $salaryStructure->basic_salary + $earn;
            $fixedAllowance = $salaryStructure->amount - $total;

            $data['selectedEarningsComponent'] = $selectedEarningsComponent;
            $data['selectedDeductionsComponent'] = $selectedDeductionsComponent;
            $data['fixedAllowance'] = $fixedAllowance;
            $data['grossSalary'] = $fixedAllowance + $total;
            $data['totalDeduction'] = $deduction;
            $data['netSalary'] = ($fixedAllowance + $total) - $deduction;
        }

        $pdf = app('dompdf.wrapper');
        $pdf->setOption('enable_php', true);
        $pdf->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf->loadView('recruit::jobs.offer-letter.offer-letter-pdf', $data);

        $filename = 'offer-letter-' . $offer->jobApplication->full_name;

        return [
            'pdf' => $pdf,
            'fileName' => $filename,
        ];
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        $via = [];

        if ($notifiable->email) {
            array_push($via, 'mail');
        }

        return $via;
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = route('front.jobOffer', $this->offer->hash, $this->company);
        $url = getDomainSpecificUrl($url, $this->company);

        $emailContent = parent::build()
            ->subject(__('recruit::modules.email.jobOffer'))
            ->greeting(__('email.hello').' '.$notifiable->full_name.'!')
            ->action(__('recruit::app.jobOffer.viewoffer'), $url)
            ->line(__('recruit::modules.email.thankyouNote'));

        try {
            $pdfOption = $this->offerLetterPdfObject();
            $pdf = $pdfOption['pdf'];
            $filename = $pdfOption['fileName'];

            $emailContent->attachData($pdf->output(), $filename . '.pdf');
        } catch (\Exception $e) {
            report($e);
        }

        return $emailContent;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray()
    {
        return [
            'data' => $this->offer->toArray(),
        ];
    }
}
