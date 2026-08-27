<?php

namespace Modules\Letter\Http\Controllers;

use App\Helper\Reply;
use App\Http\Controllers\AccountBaseController;
use App\Models\User;
use Illuminate\Http\Request;
use Modules\Letter\DataTables\LetterDataTable;
use Modules\Letter\Entities\Letter;
use Modules\Letter\Entities\LetterSetting;
use Modules\Letter\Entities\Template;
use Modules\Letter\Enums\LetterVariable;
use Modules\Letter\Http\Requests\Letter\StoreRequest;
use Modules\Letter\Http\Requests\Letter\UpdateRequest;

class LetterController extends AccountBaseController
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'letter::app.menu.letter';
        $this->middleware(function ($request, $next) {
            abort_403(!in_array(LetterSetting::MODULE_NAME, $this->user->modules));

            return $next($request);
        });
    }

    private function getLetterPermission($permName, $altPermName = null)
    {
        $perm = user()->permission($permName);
        if (($perm === 'none' || !$perm) && $altPermName) {
            $perm = user()->permission($altPermName);
        }
        if (in_array('admin', user_roles())) {
            return 'all';
        }
        return $perm ?: 'none';
    }

    public function index(LetterDataTable $dataTable)
    {
        $this->viewPermission = $this->getLetterPermission('view_letter', 'view_offer_letter');
        abort_403($this->viewPermission === 'none');

        $this->pageTitle = 'letter::app.menu.generate';
        return $dataTable->render('letter::letter.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->addPermission = $this->getLetterPermission('add_letter', 'add_offer_letter');
        abort_403($this->addPermission === 'none');

        $this->pageTitle = 'Create Offer Letter';

        $this->templates = Template::get();
        $selectedEmpId = request()->employee_id ?: null;
        $this->selectedEmployeeId = $selectedEmpId;
        $this->nextRefNo = 'BZ' . str_pad(((Letter::max('id') ?: 0) + 1), 3, '0', STR_PAD_LEFT);

        $employeesQuery = User::with('employeeDetail')->whereHas('employeeDetail');
        if ($selectedEmpId) {
            $employeesQuery->orWhere('id', $selectedEmpId);
        }
        $this->employees = $employeesQuery->get();

        $this->letter = request()->letterId ? Letter::with('user', 'template')->find(request()->letterId) : null;
        $this->employeeLetterVariable = $this->letter ? $this->employeeLetterVariable($this->letter) : [];

        if (request()->ajax()) {

            $html = view('letter::letter.ajax.create', $this->data)->render();
            return Reply::dataOnly(['status' => 'success', 'html' => $html, 'title' => $this->pageTitle]);
        }

        $this->view = 'letter::letter.ajax.create';
        return view('letter::letter.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $this->addPermission = $this->getLetterPermission('add_letter', 'add_offer_letter');
        abort_403($this->addPermission === 'none');

        $status = $request->status ?: 'generated';
        $offerDetails = $request->except(['_token', 'left', 'right', 'top', 'bottom', 'template_id']);

        $letter = new Letter();
        $letter->company_id = company()->id;
        $letter->template_id = $request->template_id ?: (Template::first()?->id ?: 1);
        $letter->user_id = $request->user_id ?: null;
        $letter->creator_id = user()->id;
        $letter->name = $request->employee_name ?: ($request->user_id ? null : 'Offer Recipient');
        $letter->top = $request->top ?: 20;
        $letter->right = $request->right ?: 20;
        $letter->left = $request->left ?: 20;
        $letter->bottom = $request->bottom ?: 20;
        $letter->description = $request->opening_paragraph ?: 'Offer of Employment';
        $letter->status = $status;
        $letter->offer_details = $offerDetails;
        $letter->save();

        if (empty($offerDetails['offer_ref_no'])) {
            $offerDetails['offer_ref_no'] = 'BZ' . str_pad($letter->id, 3, '0', STR_PAD_LEFT);
            $letter->offer_details = $offerDetails;
            $letter->save();
        }

        $msg = ($status == 'draft') ? __('Draft saved successfully') : __('Offer Letter created successfully');
        
        return Reply::redirect(route('letter.generate.index'), $msg);
    }

    public function edit($id)
    {
        $this->editPermission = $this->getLetterPermission('edit_letter', 'edit_offer_letter');
        abort_403($this->editPermission === 'none');

        $this->letter = Letter::with('user', 'template')->findOrFail($id);
        $this->pageTitle = 'Edit Offer Letter';

        if (request()->ajax()) {
            $html = view('letter::letter.ajax.edit', $this->data)->render();
            return Reply::dataOnly(['status' => 'success', 'html' => $html, 'title' => $this->pageTitle]);
        }

        $this->view = 'letter::letter.ajax.edit';
        return view('letter::letter.create', $this->data);
    }

    public function show($id)
    {
        return $this->edit($id);
    }

    public function update(UpdateRequest $request, $id)
    {
        $this->editPermission = $this->getLetterPermission('edit_letter', 'edit_offer_letter');
        abort_403($this->editPermission === 'none');

        $letter = Letter::findOrFail($id);
        $status = $request->status ?: $letter->status;
        $offerDetails = $request->except(['_token', 'left', 'right', 'top', 'bottom', 'template_id']);

        if (empty($offerDetails['offer_ref_no'])) {
            $offerDetails['offer_ref_no'] = $letter->offer_details['offer_ref_no'] ?? ('BZ' . str_pad($letter->id, 3, '0', STR_PAD_LEFT));
        }

        $letter->user_id = $request->user_id ?: $letter->user_id;
        $letter->creator_id = user()->id;
        $letter->name = $request->employee_name ?: $letter->name;
        $letter->top = $request->top ?: 20;
        $letter->right = $request->right ?: 20;
        $letter->left = $request->left ?: 20;
        $letter->bottom = $request->bottom ?: 20;
        $letter->description = $request->opening_paragraph ?: $letter->description;
        $letter->status = $status;
        $letter->offer_details = $offerDetails;
        $letter->save();

        $msg = ($status == 'draft') ? __('Draft updated successfully') : __('Offer Letter updated successfully');

        return Reply::redirect(route('letter.generate.index'), $msg);
    }

    public function offerEmployeeData($id)
    {
        $employee = User::with(['employeeDetail', 'employeeDetail.designation', 'employeeDetail.department', 'employeeDetail.reportingTo'])->findOrFail($id);

        $empDetail = $employee->employeeDetail;
        $annualCtc = $empDetail?->annual_ctc ?: 600000;
        $monthlyTakehome = round($annualCtc / 12, 2);

        $data = [
            'user_id' => $employee->id,
            'employee_name' => $employee->name,
            'employee_id_val' => $empDetail?->employee_id ?? '00' . $employee->id,
            'designation' => $empDetail?->designation?->name ?? 'Software Engineer',
            'department' => $empDetail?->department?->team_name ?? 'Engineering',
            'joining_date' => $empDetail?->joining_date?->format('Y-m-d') ?? now()->addDays(7)->format('Y-m-d'),
            'employment_type' => 'Full Time',
            'reporting_to' => $empDetail?->reportingTo?->name ?? 'Managing Director',
            'email' => $employee->email ?? '',
            'mobile' => $employee->mobile ?? '',
            'address' => $empDetail?->address ?: 'Saravanampatty, Coimbatore, Tamil Nadu – 641035',
            'annual_ctc' => $annualCtc,
            'monthly_takehome' => '₹' . number_format($monthlyTakehome, 2) . ' / month',
            'other_benefits' => "• Comprehensive Health Insurance for Self & Family\n• Annual Performance Incentive\n• Professional Development & Learning Allowance",
            'incentives' => 'Performance Bonus up to 10% of Annual CTC evaluated yearly',
            'probation_period' => '3 Months',
            'notice_period' => '1 Month',
            'work_location' => 'BranZo Techno Solution - Head Office, Coimbatore',
            'working_hours' => '9:30 AM - 6:30 PM (Mon - Sat)',
            'weekly_off' => 'Sunday',
            'subject' => 'Offer of Employment - ' . ($empDetail?->designation?->name ?? 'Software Engineer'),
            'opening_paragraph' => 'We are pleased to offer you employment with BranZo Techno Solution. Based on your qualifications and successful completion of interviews, we believe your skills will be a great asset to our organization.',
            'terms_conditions' => "1. Confidentiality: You shall maintain strict confidentiality regarding company data, trade secrets, and client information.\n2. Probation Period: Performance will be reviewed prior to completion of the 3 Months probation period.\n3. Notice Period: Termination by either party requires 1 Month written notice or salary in lieu thereof.",
            'additional_clauses' => "• Equipment Issuance: Company laptop and accessories provided must be returned upon separation.\n• Code of Conduct: Adherence to all internal policies and workplace standards is required.",
            'acceptance_text' => 'I accept the offer of employment on the terms and conditions outlined in this letter and confirm my joining date as specified above.',
            'signatory_name' => 'L. Manikandan',
            'signatory_designation' => 'Head of Human Resources',
        ];

        return Reply::dataOnly(['status' => 'success', 'offerData' => $data]);
    }

    public function downloadOfferPdf($id)
    {
        $this->viewPermission = $this->getLetterPermission('view_letter', 'view_offer_letter');
        abort_403($this->viewPermission === 'none');

        $this->letter = Letter::with('user', 'company')->findOrFail($id);
        $this->company = company() ?: $this->letter->company;
        $this->offerDetails = $this->letter->offer_details ?: [];

        $this->pageTitle = 'Offer Letter - ' . ($this->letter->employee_name ?: 'Employee');

        $pdf = app('dompdf.wrapper');
        $pdf->setPaper('A4', 'portrait');
        $pdf->loadView('letter::letter.pdf.offer_pdf', $this->data);
        return $pdf->download($this->pageTitle . '.pdf');
    }

    private function employeeLetterVariable($letter)
    {
        $letterVariable = [];

        if ($letter->user_id) {
            $letterVariable = LetterVariable::getMappedValues($letter->user);
        }
        else {
            $letterVariable = [
                '##EMPLOYEE_NAME##' => $letter->name,
            ];
        }

        return $letterVariable;
    }

    public function destroy($id)
    {
        $deletePermission = user()->permission('delete_letter');
        abort_403($deletePermission !== 'all');

        Letter::destroy($id);
        return Reply::success(__('messages.deleteSuccess'));
    }

    public function letterTemplate($id)
    {
        $letter = Template::findOrFail($id);
        return Reply::dataOnly(['status' => 'success', 'letter' => $letter]);
    }

    public function letterEmployee($id)
    {
        $employee = User::with('employeeDetail')->onlyEmployee()->findOrFail($id);

        $letterVariable = [];

        if ($employee) {
            $letterVariable = LetterVariable::getMappedValues($employee);
        }

        return Reply::dataOnly(['status' => 'success', 'employeeLetterVariable' => $letterVariable]);
    }

    public function downloadLetterPreviewStore(Request $request)
    {
        $this->viewPermission = user()->permission('view_letter');
        abort_403($this->viewPermission !== 'all');

        session()->put('letterPreview', $request->description);

        return Reply::dataOnly(['status' => 'success', 'url' => route('letter.download.preview')]);
    }

    public function downloadLetterPreview()
    {
        $this->viewPermission = user()->permission('view_letter');
        abort_403($this->viewPermission !== 'all');

        if (!session()->has('letterPreview')) {
            return abort(404);
        }

        $this->letter = session('letterPreview');
        session()->forget('letterPreview');
        $this->pageTitle = __('letter::app.previewLetter');

        $pdf = app('dompdf.wrapper');
        $pdf->loadView('letter::letter.pdf.preview', $this->data);
        return $pdf->download($this->pageTitle . '.pdf');
    }

    public function downloadLetter($id)
    {
        $this->viewPermission = user()->permission('view_letter');
        abort_403($this->viewPermission !== 'all');

        $this->letter = Letter::with('user', 'template')->findOrFail($id);
        $employeeLetterVariable = $this->employeeLetterVariable($this->letter);
        $description = $this->letter->description;

        foreach ($employeeLetterVariable as $key => $value) {
            $description = str_replace($key, $value, $description);
        }

        $this->description = $description;
        $this->pageTitle = $this->letter->employee_name . ' - ' . $this->letter->template->title;

        $pdf = app('dompdf.wrapper');
        $pdf->loadView('letter::letter.pdf.letter', $this->data);
        return $pdf->download($this->pageTitle . '.pdf');
    }

}
