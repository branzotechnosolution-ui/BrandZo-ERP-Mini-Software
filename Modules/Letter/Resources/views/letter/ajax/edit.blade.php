@php
    $d = $letter->offer_details ?: [];
@endphp
<style>
    .offer-form-card {
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        border: 1px solid #e2e8f0;
        margin-bottom: 20px;
        background: #fff;
    }
    .offer-form-card .card-header {
        background: #f8fafc;
        border-bottom: 1px solid #e2e8f0;
        padding: 12px 18px;
        font-weight: 600;
        font-size: 15px;
        color: #0f172a;
        display: flex;
        align-items: center;
    }
    .offer-form-card .card-header i {
        color: #0a58ca;
        margin-right: 8px;
    }
    .a4-preview-wrapper {
        position: sticky;
        top: 20px;
    }
    .a4-canvas {
        background: #ffffff;
        box-shadow: 0 10px 30px rgba(0,0,0,0.18);
        border-radius: 4px;
        padding: 30px 35px;
        font-family: 'Inter', sans-serif;
        font-size: 12px;
        color: #1e293b;
        line-height: 1.5;
        max-height: 850px;
        overflow-y: auto;
        border: 1px solid #cbd5e1;
    }
    .a4-header {
        border-bottom: 2px solid #0a58ca;
        padding-bottom: 12px;
        margin-bottom: 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .a4-header-logo img {
        max-height: 48px;
    }
    .a4-header-company {
        text-align: right;
        font-size: 10px;
        color: #475569;
    }
    .a4-header-company h3 {
        margin: 0;
        font-size: 15px;
        font-weight: 700;
        color: #0f172a;
    }
    .a4-doc-title {
        text-align: center;
        font-size: 13px;
        font-weight: 700;
        color: #0a58ca;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 12px 0;
        padding-bottom: 3px;
        border-bottom: 2px solid #0a58ca;
        display: inline-block;
    }
    .a4-subject-box {
        background: #eff6ff;
        border-left: 4px solid #0a58ca;
        padding: 6px 10px;
        font-weight: 700;
        color: #0f172a;
        margin: 10px 0;
    }
    .a4-section-title {
        font-size: 11px;
        font-weight: 700;
        color: #0f172a;
        border-bottom: 1px solid #cbd5e1;
        padding-bottom: 3px;
        margin-top: 14px;
        margin-bottom: 8px;
        text-transform: uppercase;
    }
    .a4-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 10px;
        font-size: 11px;
    }
    .a4-table th, .a4-table td {
        border: 1px solid #cbd5e1;
        padding: 5px 8px;
        text-align: left;
    }
    .a4-table th {
        background: #f1f5f9;
        font-weight: 600;
        color: #334155;
        width: 35%;
    }
    .a4-sign-grid {
        display: flex;
        justify-content: space-between;
        margin-top: 24px;
        page-break-inside: avoid;
    }
    .a4-sign-box {
        width: 48%;
    }
    .a4-sign-line {
        border-bottom: 1px solid #94a3b8;
        margin: 35px 0 6px 0;
        width: 85%;
    }
</style>

<div class="row">
    <!-- Left Column: Editable Offer Letter Form -->
    <div class="col-xl-6 col-lg-6 col-md-12">
        <form id="editOfferLetterForm">
            @csrf
            @method('PUT')
            <input type="hidden" name="status" id="edit_offer_status" value="{{ $letter->status ?: 'generated' }}">

            <!-- Card 1: Employee Information -->
            <div class="offer-form-card">
                <div class="card-header">
                    <i class="fa fa-user-circle"></i> Edit Offer Letter #{{ str_pad($letter->id, 3, '0', STR_PAD_LEFT) }}
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Employee Name *</label>
                            <input type="text" name="employee_name" id="inp_employee_name" class="form-control" value="{{ $d['employee_name'] ?? $letter->employee_name }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Employee ID</label>
                            <input type="text" name="employee_id_val" id="inp_employee_id_val" class="form-control" value="{{ $d['employee_id_val'] ?? ('00' . $letter->id) }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Designation</label>
                            <input type="text" name="designation" id="inp_designation" class="form-control" value="{{ $d['designation'] ?? 'Software Engineer' }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Department</label>
                            <input type="text" name="department" id="inp_department" class="form-control" value="{{ $d['department'] ?? 'Engineering' }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Joining Date</label>
                            <input type="date" name="joining_date" id="inp_joining_date" class="form-control" value="{{ $d['joining_date'] ?? date('Y-m-d') }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Employment Type</label>
                            <select name="employment_type" id="inp_employment_type" class="form-control">
                                <option value="Full Time" @selected(($d['employment_type'] ?? '') == 'Full Time')>Full Time</option>
                                <option value="Part Time" @selected(($d['employment_type'] ?? '') == 'Part Time')>Part Time</option>
                                <option value="Contract" @selected(($d['employment_type'] ?? '') == 'Contract')>Contract</option>
                                <option value="Internship" @selected(($d['employment_type'] ?? '') == 'Internship')>Internship</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Reporting To</label>
                            <input type="text" name="reporting_to" id="inp_reporting_to" class="form-control" value="{{ $d['reporting_to'] ?? 'Managing Director' }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Email</label>
                            <input type="email" name="email" id="inp_email" class="form-control" value="{{ $d['email'] ?? ($letter->user?->email ?: '') }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Mobile</label>
                            <input type="text" name="mobile" id="inp_mobile" class="form-control" value="{{ $d['mobile'] ?? ($letter->user?->mobile ?: '') }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Candidate Address</label>
                            <textarea name="address" id="inp_address" class="form-control" rows="2">{{ $d['address'] ?? '' }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2: Compensation Details -->
            <div class="offer-form-card">
                <div class="card-header">
                    <i class="fa fa-money-bill-wave"></i> 2. Compensation & Salary Breakdown
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Annual CTC (₹)</label>
                            <input type="number" name="annual_ctc" id="inp_annual_ctc" class="form-control" value="{{ $d['annual_ctc'] ?? 600000 }}" step="1000">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Monthly Take-Home</label>
                            <input type="text" name="monthly_takehome" id="inp_monthly_takehome" class="form-control" value="{{ $d['monthly_takehome'] ?? '₹50,000.00 / month' }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Other Benefits & Allowances</label>
                            <textarea name="other_benefits" id="inp_other_benefits" class="form-control" rows="2">{{ $d['other_benefits'] ?? 'Comprehensive Health Insurance for Self & Family' }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Incentives / Bonuses</label>
                            <textarea name="incentives" id="inp_incentives" class="form-control" rows="2">{{ $d['incentives'] ?? 'Performance Bonus evaluated yearly' }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3: Employment Details -->
            <div class="offer-form-card">
                <div class="card-header">
                    <i class="fa fa-briefcase"></i> 3. Employment Terms & Location
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Probation Period</label>
                            <select name="probation_period" id="inp_probation_period" class="form-control">
                                <option value="1 Month" @selected(($d['probation_period'] ?? '') == '1 Month')>1 Month</option>
                                <option value="2 Months" @selected(($d['probation_period'] ?? '') == '2 Months')>2 Months</option>
                                <option value="3 Months" @selected(($d['probation_period'] ?? '3 Months') == '3 Months')>3 Months</option>
                                <option value="6 Months" @selected(($d['probation_period'] ?? '') == '6 Months')>6 Months</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Notice Period</label>
                            <select name="notice_period" id="inp_notice_period" class="form-control">
                                <option value="15 Days" @selected(($d['notice_period'] ?? '') == '15 Days')>15 Days</option>
                                <option value="1 Month" @selected(($d['notice_period'] ?? '1 Month') == '1 Month')>1 Month</option>
                                <option value="2 Months" @selected(($d['notice_period'] ?? '') == '2 Months')>2 Months</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Work Location</label>
                            <input type="text" name="work_location" id="inp_work_location" class="form-control" value="{{ $d['work_location'] ?? 'BranZo Techno Solution - Head Office' }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Working Hours</label>
                            <input type="text" name="working_hours" id="inp_working_hours" class="form-control" value="{{ $d['working_hours'] ?? '9:30 AM - 6:30 PM (Mon - Sat)' }}">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4: Offer Letter Content -->
            <div class="offer-form-card">
                <div class="card-header">
                    <i class="fa fa-file-alt"></i> 4. Offer Letter Content & Clauses
                </div>
                <div class="card-body p-3">
                    <div class="mb-3">
                        <label class="font-weight-bold f-13">Subject Line</label>
                        <input type="text" name="subject" id="inp_subject" class="form-control" value="{{ $d['subject'] ?? 'Offer of Employment' }}">
                    </div>
                    <div class="mb-3">
                        <label class="font-weight-bold f-13">Opening Paragraph</label>
                        <textarea name="opening_paragraph" id="inp_opening_paragraph" class="form-control" rows="3">{{ $d['opening_paragraph'] ?? 'We are pleased to offer you employment with BranZo Techno Solution.' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="font-weight-bold f-13">Terms & Conditions</label>
                        <textarea name="terms_conditions" id="inp_terms_conditions" class="form-control" rows="4">{{ $d['terms_conditions'] ?? "1. Confidentiality: Maintain strict confidentiality regarding proprietary code and assets.\n2. Probation: Evaluation prior to completion of probation.\n3. Notice: 1 month written notice by either party." }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="font-weight-bold f-13">Additional Clauses</label>
                        <textarea name="additional_clauses" id="inp_additional_clauses" class="form-control" rows="2">{{ $d['additional_clauses'] ?? 'Company workstation equipment will be issued on your joining date.' }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Card 5: Acceptance & Signatory -->
            <div class="offer-form-card">
                <div class="card-header">
                    <i class="fa fa-file-signature"></i> 5. Acceptance & Signatory
                </div>
                <div class="card-body p-3">
                    <div class="mb-3">
                        <label class="font-weight-bold f-13">Acceptance Statement</label>
                        <textarea name="acceptance_text" id="inp_acceptance_text" class="form-control" rows="2">{{ $d['acceptance_text'] ?? 'I accept the offer of employment on the terms outlined above.' }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Authorized Signatory Name</label>
                            <input type="text" name="signatory_name" id="inp_signatory_name" class="form-control" value="{{ $d['signatory_name'] ?? user()->name }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Signatory Designation</label>
                            <input type="text" name="signatory_designation" id="inp_signatory_designation" class="form-control" value="{{ $d['signatory_designation'] ?? 'Head of Human Resources' }}">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Action Buttons -->
            <div class="d-flex justify-content-between align-items-center mb-4 p-3 bg-white border rounded shadow-sm">
                <div>
                    <a href="{{ route('letter.download.offer-pdf', $letter->id) }}" target="_blank" class="btn btn-danger font-weight-bold mr-2">
                        <i class="fa fa-file-pdf mr-1"></i> Download PDF
                    </a>
                    <button type="button" class="btn btn-warning text-dark font-weight-bold mr-2" id="btn-save-draft">
                        <i class="fa fa-save mr-1"></i> Save Draft
                    </button>
                </div>
                <button type="button" class="btn btn-primary font-weight-bold px-4 py-2" id="btn-update-offer">
                    <i class="fa fa-check-circle mr-1"></i> Update Offer Letter
                </button>
            </div>
        </form>
    </div>

    <!-- Right Column: Sticky Live A4 Preview Canvas -->
    <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="a4-preview-wrapper" id="a4-preview-container">
            <div class="d-flex justify-content-between align-items-center mb-2 px-1">
                <h5 class="mb-0 font-weight-bold text-dark"><i class="fa fa-file-pdf text-danger mr-2"></i>LIVE A4 PREVIEW</h5>
                <span class="badge badge-success px-3 py-1 f-12"><i class="fa fa-sync-alt fa-spin mr-1"></i> Real-time Sync</span>
            </div>

            <!-- Printable A4 Paper Document Canvas -->
            <div class="a4-canvas" id="a4-canvas">
                <!-- Header -->
                <div class="a4-header">
                    <div class="a4-header-logo">
                        <img src="{{ asset('user-uploads/app-logo/brandzo-logo.png') }}" alt="BranZo Techno Solution" style="max-height: 52px; width: auto;" onerror="this.onerror=null; this.src='{{ company()->logo_url }}';">
                    </div>
                    <div class="a4-header-company">
                        <h3>{{ company()->company_name ?: 'BranZo Techno Solution' }}</h3>
                        <p class="m-0">Coimbatore, Tamil Nadu – 641035, India</p>
                        <p class="m-0">Phone: +91 9876543210 | hr@brandzo.in</p>
                        <p class="m-0">Website: www.brandzo.in</p>
                    </div>
                </div>

                <!-- Document Ref & Date -->
                <div class="d-flex justify-content-between mb-3 f-11 text-muted">
                    <div><strong>REF:</strong> <span id="pv_ref_no">{{ $d['offer_ref_no'] ?? ('BZ' . str_pad($letter->id, 3, '0', STR_PAD_LEFT)) }}</span></div>
                    <div><strong>Date:</strong> {{ date('d/m/Y', strtotime($letter->created_at ?: now())) }}</div>
                </div>

                <!-- Recipient Address Box -->
                <div class="p-2 mb-3 rounded border" style="background: #f8fafc; font-size: 11px;">
                    <strong>To:</strong><br>
                    <strong class="text-dark" id="pv_employee_name" style="font-size: 13px;">[Candidate Name]</strong><br>
                    <span id="pv_address">[Candidate Address]</span><br>
                    <span class="text-muted" id="pv_contact_info">Email: candidate@email.com | Mobile: --</span>
                </div>

                <!-- Subject -->
                <div class="a4-subject-box" id="pv_subject">
                    SUBJECT: Offer of Employment
                </div>

                <!-- Opening Text -->
                <div class="mb-3 text-justify" id="pv_opening_paragraph" style="white-space: pre-line;">
                    We are pleased to offer you employment with BranZo Techno Solution.
                </div>

                <!-- Section 1: Employment Details Table -->
                <div class="a4-section-title">1. Employment Details</div>
                <table class="a4-table">
                    <tr>
                        <th>Employee ID</th>
                        <td id="pv_employee_id_val">[Employee ID]</td>
                    </tr>
                    <tr>
                        <th>Designation</th>
                        <td><strong id="pv_designation" class="text-dark">[Designation]</strong></td>
                    </tr>
                    <tr>
                        <th>Department</th>
                        <td id="pv_department">[Department]</td>
                    </tr>
                    <tr>
                        <th>Joining Date</th>
                        <td><strong id="pv_joining_date" class="text-primary">[Joining Date]</strong></td>
                    </tr>
                    <tr>
                        <th>Employment Type</th>
                        <td id="pv_employment_type">[Employment Type]</td>
                    </tr>
                    <tr>
                        <th>Reporting Manager</th>
                        <td id="pv_reporting_to">[Reporting Manager]</td>
                    </tr>
                    <tr>
                        <th>Work Location</th>
                        <td id="pv_work_location">[Work Location]</td>
                    </tr>
                </table>

                <!-- Section 2: Compensation Table -->
                <div class="a4-section-title">2. Compensation & Benefits</div>
                <table class="a4-table">
                    <tr>
                        <th>Annual CTC</th>
                        <td><strong id="pv_annual_ctc" style="color: #0a58ca; font-size: 13px;">₹6,00,000.00 Per Annum</strong></td>
                    </tr>
                    <tr>
                        <th>Monthly Take-Home</th>
                        <td id="pv_monthly_takehome">₹50,000.00 / month</td>
                    </tr>
                    <tr>
                        <th>Benefits & Allowances</th>
                        <td id="pv_other_benefits" style="white-space: pre-line;">Health Insurance</td>
                    </tr>
                    <tr>
                        <th>Incentives / Bonuses</th>
                        <td id="pv_incentives" style="white-space: pre-line;">Performance Bonus</td>
                    </tr>
                </table>

                <!-- Section 3: Terms & Conditions -->
                <div class="a4-section-title">3. Terms & Conditions</div>
                <div class="mb-3 text-justify" id="pv_terms_conditions" style="white-space: pre-line; font-size: 11px;">
                    Terms and conditions outlined.
                </div>

                <!-- Section 4: Additional Terms -->
                <div class="a4-section-title">4. Additional Terms</div>
                <div class="mb-3 text-justify" id="pv_additional_clauses" style="white-space: pre-line; font-size: 11px;">
                    Additional clauses.
                </div>

                <!-- Section 5: Acceptance & Signatory -->
                <div class="a4-section-title">5. Offer Acceptance</div>
                <div class="font-italic text-muted mb-2" id="pv_acceptance_text" style="font-size: 10.5px;">
                    "I accept the offer of employment."
                </div>

                <div class="a4-sign-grid">
                    <div class="a4-sign-box">
                        <strong class="d-block mb-1 text-dark">For BranZo Techno Solution</strong>
                        <img src="{{ asset('user-uploads/signatures/admin-signature.png') }}" alt="Authorized Signature" style="max-height: 55px; width: auto; margin-bottom: 4px; display: block;" onerror="this.onerror=null; this.src='{{ asset('user-uploads/signatures/admin-signature.jpg') }}';">
                        <strong id="pv_signatory_name" class="d-block text-dark">L. Manikandan</strong>
                        <span id="pv_signatory_designation" class="text-muted f-11">Head of Human Resources</span>
                    </div>
                    <div class="a4-sign-box">
                        <strong class="d-block mb-1 text-dark">Candidate Acceptance</strong>
                        <div class="a4-sign-line"></div>
                        <strong>Signature: __________________</strong><br>
                        <span class="f-11 text-muted">Name: <span id="pv_signatory_emp_name">[Candidate Name]</span></span>
                    </div>
                </div>

                <div class="text-center text-muted border-top pt-2 mt-4" style="font-size: 9px;">
                    BranZo Techno Solution — Strictly Confidential & Personal | Page 1 of 1
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        // Real-time calculation of Monthly Take-Home from CTC input
        $('#inp_annual_ctc').on('input', function() {
            let val = parseFloat($(this).val()) || 0;
            if (val > 0) {
                let monthly = (val / 12).toFixed(2);
                $('#inp_monthly_takehome').val('₹' + Number(monthly).toLocaleString('en-IN') + ' / month');
            }
        });

        // Live A4 Preview synchronization
        function syncA4Preview() {
            let empName = $('#inp_employee_name').val() || '[Candidate Name]';
            let empId = $('#inp_employee_id_val').val() || '001';
            let desig = $('#inp_designation').val() || '[Designation]';
            let dept = $('#inp_department').val() || '[Department]';
            let jDate = $('#inp_joining_date').val() || '{{ date("Y-m-d") }}';
            let empType = $('#inp_employment_type').val() || 'Full Time';
            let reporting = $('#inp_reporting_to').val() || 'Managing Director';
            let email = $('#inp_email').val() || '';
            let mobile = $('#inp_mobile').val() || '';
            let address = $('#inp_address').val() || '[Candidate Address]';
            let ctc = parseFloat($('#inp_annual_ctc').val()) || 600000;
            let takeHome = $('#inp_monthly_takehome').val() || ('₹' + Number((ctc/12).toFixed(2)).toLocaleString('en-IN') + ' / month');
            let benefits = $('#inp_other_benefits').val() || '';
            let incentives = $('#inp_incentives').val() || '';
            let location = $('#inp_work_location').val() || 'BranZo Techno Solution - Head Office';
            let subject = $('#inp_subject').val() || 'Offer of Employment';
            let opening = $('#inp_opening_paragraph').val() || '';
            let terms = $('#inp_terms_conditions').val() || '';
            let addClauses = $('#inp_additional_clauses').val() || '';
            let acceptText = $('#inp_acceptance_text').val() || '';
            let sigName = $('#inp_signatory_name').val() || 'HR Manager';
            let sigDesig = $('#inp_signatory_designation').val() || 'Head of Human Resources';

            $('#pv_employee_name').text(empName);
            $('#pv_signatory_emp_name').text(empName);
            $('#pv_employee_id_val').text(empId);
            $('#pv_designation').text(desig);
            $('#pv_department').text(dept);
            $('#pv_joining_date').text(jDate);
            $('#pv_employment_type').text(empType);
            $('#pv_reporting_to').text(reporting);
            $('#pv_address').text(address);
            $('#pv_contact_info').text('Email: ' + email + ' | Mobile: ' + mobile);
            $('#pv_annual_ctc').text('₹' + Number(ctc).toLocaleString('en-IN') + '.00 Per Annum');
            $('#pv_monthly_takehome').text(takeHome);
            $('#pv_other_benefits').text(benefits);
            $('#pv_incentives').text(incentives);
            $('#pv_work_location').text(location);
            $('#pv_subject').text('SUBJECT: ' + subject);
            $('#pv_opening_paragraph').text(opening);
            $('#pv_terms_conditions').text(terms);
            $('#pv_additional_clauses').text(addClauses);
            $('#pv_acceptance_text').text('"' + acceptText + '"');
            $('#pv_signatory_name').text(sigName);
            $('#pv_signatory_designation').text(sigDesig);
        }

        // Attach live input listeners
        $('#editOfferLetterForm').on('input change', 'input, select, textarea', function() {
            syncA4Preview();
        });

        // Submit function
        function updateOfferLetterForm(statusVal) {
            $('#edit_offer_status').val(statusVal);
            let url = "{{ route('letter.generate.update', $letter->id) }}";

            $.easyAjax({
                url: url,
                container: '#editOfferLetterForm',
                type: "POST",
                blockUI: true,
                data: $('#editOfferLetterForm').serialize(),
                success: function(response) {
                    if (response.status === 'success') {
                        if (typeof showTable !== 'undefined') {
                            showTable();
                        }
                        if (typeof closeRightModal !== 'undefined') {
                            closeRightModal();
                        }
                    }
                }
            });
        }

        $('#btn-save-draft').click(function() {
            updateOfferLetterForm('draft');
        });

        $('#btn-update-offer').click(function() {
            updateOfferLetterForm('generated');
        });

        // Initial trigger
        syncA4Preview();
    });
</script>
