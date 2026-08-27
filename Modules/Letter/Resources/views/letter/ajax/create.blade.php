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
        <form id="offerLetterForm">
            @csrf
            <input type="hidden" name="status" id="offer_status" value="generated">

            <!-- Card 1: Employee Information -->
            <div class="offer-form-card">
                <div class="card-header">
                    <i class="fa fa-user-circle"></i> 1. Employee Information
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="font-weight-bold f-14 text-dark"><i class="fa fa-user-check text-primary mr-1"></i> Select Employee to Auto-Fill Information</label>
                            <select name="user_id" id="employee_select" class="form-control height-35 f-14 border">
                                <option value="">-- Select Employee --</option>
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->id }}" @selected(!empty($selectedEmployeeId) && $selectedEmployeeId == $employee->id)>{{ $employee->name }} ({{ $employee->employeeDetail->employee_id ?? 'ID: '.$employee->id }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Employee Name *</label>
                            <input type="text" name="employee_name" id="inp_employee_name" class="form-control" placeholder="Candidate Full Name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Employee ID</label>
                            <input type="text" name="employee_id_val" id="inp_employee_id_val" class="form-control" placeholder="e.g. 001">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Designation</label>
                            <input type="text" name="designation" id="inp_designation" class="form-control" placeholder="e.g. Senior Software Engineer">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Department</label>
                            <input type="text" name="department" id="inp_department" class="form-control" placeholder="e.g. Engineering">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Joining Date</label>
                            <input type="date" name="joining_date" id="inp_joining_date" class="form-control" value="{{ date('Y-m-d') }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Employment Type</label>
                            <select name="employment_type" id="inp_employment_type" class="form-control">
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                                <option value="Contract">Contract</option>
                                <option value="Internship">Internship</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Reporting To</label>
                            <input type="text" name="reporting_to" id="inp_reporting_to" class="form-control" placeholder="e.g. Managing Director">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Email</label>
                            <input type="email" name="email" id="inp_email" class="form-control" placeholder="candidate@email.com">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Mobile</label>
                            <input type="text" name="mobile" id="inp_mobile" class="form-control" placeholder="e.g. 9876543210">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Candidate Address</label>
                            <textarea name="address" id="inp_address" class="form-control" rows="2" placeholder="Full residential address"></textarea>
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
                            <input type="number" name="annual_ctc" id="inp_annual_ctc" class="form-control" placeholder="600000" step="1000">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Monthly Take-Home</label>
                            <input type="text" name="monthly_takehome" id="inp_monthly_takehome" class="form-control" placeholder="₹50,000.00 / month">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Other Benefits & Allowances</label>
                            <textarea name="other_benefits" id="inp_other_benefits" class="form-control" rows="2" placeholder="Health Insurance, Learning Allowance, etc."></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Incentives / Bonuses</label>
                            <textarea name="incentives" id="inp_incentives" class="form-control" rows="2" placeholder="Performance incentives description"></textarea>
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
                                <option value="1 Month">1 Month</option>
                                <option value="2 Months">2 Months</option>
                                <option value="3 Months" selected>3 Months</option>
                                <option value="6 Months">6 Months</option>
                                <option value="None">None</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Notice Period</label>
                            <select name="notice_period" id="inp_notice_period" class="form-control">
                                <option value="15 Days">15 Days</option>
                                <option value="1 Month" selected>1 Month</option>
                                <option value="2 Months">2 Months</option>
                                <option value="3 Months">3 Months</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Work Location</label>
                            <input type="text" name="work_location" id="inp_work_location" class="form-control" value="BranZo Techno Solution - Head Office, Coimbatore">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Working Hours</label>
                            <input type="text" name="working_hours" id="inp_working_hours" class="form-control" value="9:30 AM - 6:30 PM (Mon - Sat)">
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
                        <input type="text" name="subject" id="inp_subject" class="form-control" value="Offer of Employment - Senior Software Engineer">
                    </div>
                    <div class="mb-3">
                        <label class="font-weight-bold f-13">Opening Paragraph</label>
                        <textarea name="opening_paragraph" id="inp_opening_paragraph" class="form-control" rows="3">We are pleased to offer you employment with BranZo Techno Solution. Based on your qualifications and successful completion of technical interviews, we believe your skills will be a great asset to our organization.</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="font-weight-bold f-13">Terms & Conditions</label>
                        <textarea name="terms_conditions" id="inp_terms_conditions" class="form-control" rows="4">1. Confidentiality: You agree to keep all company proprietary data, source code, and trade secrets strictly confidential.
2. Probation & Review: Performance will be reviewed prior to completion of your probation period.
3. Termination & Notice: Separation requires 1-month written notice by either party or salary in lieu of notice.</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="font-weight-bold f-13">Additional Clauses</label>
                        <textarea name="additional_clauses" id="inp_additional_clauses" class="form-control" rows="2">Company workstation equipment and software credentials will be issued on your joining date upon signing the asset agreement.</textarea>
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
                        <textarea name="acceptance_text" id="inp_acceptance_text" class="form-control" rows="2">I accept the offer of employment on the terms and conditions outlined in this letter and confirm my joining date as specified above.</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Authorized Signatory Name</label>
                            <input type="text" name="signatory_name" id="inp_signatory_name" class="form-control" value="{{ user()->name }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold f-13">Signatory Designation</label>
                            <input type="text" name="signatory_designation" id="inp_signatory_designation" class="form-control" value="Head of Human Resources">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Action Buttons -->
            <div class="d-flex justify-content-between align-items-center mb-4 p-3 bg-white border rounded shadow-sm">
                <div>
                    <button type="button" class="btn btn-warning text-dark font-weight-bold mr-2" id="btn-save-draft">
                        <i class="fa fa-save mr-1"></i> Save Draft
                    </button>
                    <button type="button" class="btn btn-outline-secondary font-weight-bold" id="btn-scroll-preview">
                        <i class="fa fa-eye mr-1"></i> Scroll to Preview
                    </button>
                </div>
                <button type="button" class="btn btn-primary font-weight-bold px-4 py-2" id="btn-create-offer">
                    <i class="fa fa-check-circle mr-1"></i> Create Offer Letter
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
                    <div><strong>REF:</strong> <span id="pv_ref_no">{{ $nextRefNo ?? 'BZ001' }}</span></div>
                    <div><strong>Date:</strong> {{ date('d/m/Y') }}</div>
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
                    SUBJECT: Offer of Employment - Senior Software Engineer
                </div>

                <!-- Opening Text -->
                <div class="mb-3 text-justify" id="pv_opening_paragraph" style="white-space: pre-line;">
                    We are pleased to offer you employment with BranZo Techno Solution. Based on your qualifications, we believe your skills will be a valuable addition to our team.
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
                        <td id="pv_other_benefits" style="white-space: pre-line;">Comprehensive Health Insurance, Learning Allowance</td>
                    </tr>
                    <tr>
                        <th>Incentives / Bonuses</th>
                        <td id="pv_incentives" style="white-space: pre-line;">Performance Bonus up to 10% CTC</td>
                    </tr>
                </table>

                <!-- Section 3: Terms & Conditions -->
                <div class="a4-section-title">3. Terms & Conditions</div>
                <div class="mb-3 text-justify" id="pv_terms_conditions" style="white-space: pre-line; font-size: 11px;">
                    1. Confidentiality: You shall maintain strict confidentiality regarding company data.
                    2. Probation Period: Review prior to 3-month probation completion.
                    3. Notice Period: 1-month notice required by either party.
                </div>

                <!-- Section 4: Additional Terms -->
                <div class="a4-section-title">4. Additional Terms</div>
                <div class="mb-3 text-justify" id="pv_additional_clauses" style="white-space: pre-line; font-size: 11px;">
                    Company workstation equipment will be issued on your joining date upon signing the asset policy.
                </div>

                <!-- Section 5: Acceptance & Signatory -->
                <div class="a4-section-title">5. Offer Acceptance</div>
                <div class="font-italic text-muted mb-2" id="pv_acceptance_text" style="font-size: 10.5px;">
                    "I accept the offer of employment on the terms and conditions outlined in this letter and confirm my joining date as specified above."
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
            let benefits = $('#inp_other_benefits').val() || 'Comprehensive Health Insurance';
            let incentives = $('#inp_incentives').val() || 'Performance Incentive';
            let probation = $('#inp_probation_period').val() || '3 Months';
            let notice = $('#inp_notice_period').val() || '1 Month';
            let location = $('#inp_work_location').val() || 'BranZo Techno Solution - Head Office';
            let hours = $('#inp_working_hours').val() || '9:30 AM - 6:30 PM';
            let subject = $('#inp_subject').val() || 'Offer of Employment';
            let opening = $('#inp_opening_paragraph').val() || 'We are pleased to offer you employment with BranZo Techno Solution.';
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

        // Attach live input listeners across all form controls
        $('#offerLetterForm').on('input change', 'input, select, textarea', function() {
            syncA4Preview();
        });

        // Employee Selection Auto-Fill AJAX Trigger
        $('#employee_select').on('change', function() {
            let empId = $(this).val();
            if (!empId) return;

            let url = "{{ route('letter.offer.employee-data', ':id') }}".replace(':id', empId);

            $.easyAjax({
                url: url,
                type: "GET",
                blockUI: true,
                success: function(response) {
                    if (response.status === 'success' && response.offerData) {
                        let d = response.offerData;
                        $('#inp_employee_name').val(d.employee_name);
                        $('#inp_employee_id_val').val(d.employee_id_val);
                        $('#inp_designation').val(d.designation);
                        $('#inp_department').val(d.department);
                        $('#inp_joining_date').val(d.joining_date);
                        $('#inp_employment_type').val(d.employment_type);
                        $('#inp_reporting_to').val(d.reporting_to);
                        $('#inp_email').val(d.email);
                        $('#inp_mobile').val(d.mobile);
                        $('#inp_address').val(d.address);
                        $('#inp_annual_ctc').val(d.annual_ctc);
                        $('#inp_monthly_takehome').val(d.monthly_takehome);
                        $('#inp_other_benefits').val(d.other_benefits);
                        $('#inp_incentives').val(d.incentives);
                        $('#inp_probation_period').val(d.probation_period);
                        $('#inp_notice_period').val(d.notice_period);
                        $('#inp_work_location').val(d.work_location);
                        $('#inp_working_hours').val(d.working_hours);
                        $('#inp_subject').val(d.subject);
                        $('#inp_opening_paragraph').val(d.opening_paragraph);
                        $('#inp_terms_conditions').val(d.terms_conditions);
                        $('#inp_additional_clauses').val(d.additional_clauses);
                        $('#inp_acceptance_text').val(d.acceptance_text);
                        $('#inp_signatory_name').val(d.signatory_name);
                        $('#inp_signatory_designation').val(d.signatory_designation);

                        syncA4Preview();
                    }
                }
            });
        });

        // Scroll to preview helper
        $('#btn-scroll-preview').click(function() {
            $('html, body').animate({
                scrollTop: $("#a4-preview-container").offset().top - 70
            }, 500);
        });

        // Submit helper function
        function submitOfferLetterForm(statusVal) {
            $('#offer_status').val(statusVal);
            let url = "{{ route('letter.generate.store') }}";

            $.easyAjax({
                url: url,
                container: '#offerLetterForm',
                type: "POST",
                blockUI: true,
                data: $('#offerLetterForm').serialize(),
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

        // Save Draft Button
        $('#btn-save-draft').click(function() {
            submitOfferLetterForm('draft');
        });

        // Create Offer Letter Confirmation Modal
        $('#btn-create-offer').click(function() {
            if (!$('#inp_employee_name').val()) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Employee Name Required',
                    text: 'Please enter or select an employee name before creating the offer letter.'
                });
                return;
            }

            Swal.fire({
                title: "Create Offer Letter?",
                text: "Please confirm that all employee and offer information is correct.",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Create Offer Letter",
                cancelButtonText: "Cancel",
                customClass: {
                    confirmButton: "btn btn-primary mr-3",
                    cancelButton: "btn btn-secondary"
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.isConfirmed) {
                    submitOfferLetterForm('generated');
                }
            });
        });

        // Initial preselected employee auto-fill trigger
        let preselectedEmpId = "{{ $selectedEmployeeId ?? '' }}";
        if (preselectedEmpId && preselectedEmpId !== '') {
            $('#employee_select').val(preselectedEmpId).trigger('change');
        } else if ($('#employee_select').val()) {
            $('#employee_select').trigger('change');
        } else {
            syncA4Preview();
        }
    });
</script>
