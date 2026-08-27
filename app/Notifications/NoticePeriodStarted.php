<?php

namespace App\Notifications;

use App\Models\EmployeeDetails;

class NoticePeriodStarted extends BaseNotification
{

    private $detail;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(EmployeeDetails $detail)
    {
        $this->detail = $detail;
        $this->company = $detail->user->company ?? null;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        $via = ['database'];

        if ($notifiable->email_notifications && $notifiable->email != '') {
            array_push($via, 'mail');
        }

        return $via;
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $employee = $this->detail->user;
        $dateFormat = $this->company->date_format ?? 'd-m-Y';

        $startDate = $this->detail->notice_period_start_date
            ? \Illuminate\Support\Carbon::parse($this->detail->notice_period_start_date)->translatedFormat($dateFormat)
            : '--';

        $endDate = $this->detail->notice_period_end_date
            ? \Illuminate\Support\Carbon::parse($this->detail->notice_period_end_date)->translatedFormat($dateFormat)
            : '--';

        $url = route('employees.show', $employee->id);
        $url = getDomainSpecificUrl($url, $this->company);

        return parent::build($notifiable)
            ->subject(__('modules.employees.noticePeriodStartedSubject', ['employee' => $employee->name]))
            ->greeting(__('email.hello') . ' ' . $notifiable->name . '!')
            ->line(__('modules.employees.noticePeriodStartedLine', [
                'employee' => $employee->name,
                'start' => $startDate,
                'end' => $endDate,
            ]))
            ->action(__('app.view') . ' ' . __('app.employee'), $url)
            ->line(__('email.thankyouNote'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'user_id' => $notifiable->id,
            'employee_id' => $this->detail->user_id,
            'heading' => $this->detail->user->name ?? '',
            'notice_period_start_date' => $this->detail->notice_period_start_date,
            'notice_period_end_date' => $this->detail->notice_period_end_date,
        ];
    }

}
