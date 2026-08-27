@php
$viewLeadCategoryPermission = user()->permission('view_lead_category');
$viewLeadSourcesPermission = user()->permission('view_lead_sources');
$addLeadSourcesPermission = user()->permission('add_lead_sources');
$addLeadCategoryPermission = user()->permission('add_lead_category');
$addLeadAgentPermission = user()->permission('add_lead_agent');
$viewLeadAgentPermission = user()->permission('view_lead_agents');

$currentUser = user();
$lead = $leadContact ?? null;

$dealCode = $generatedDealCode ?? ('BZ' . str_pad($deal->id ?? 1, 3, '0', STR_PAD_LEFT));
$defaultName = $defaultDealName ?: ($lead ? ($lead->company_name ? ($lead->company_name . ' - ' . $lead->client_name) : $lead->client_name) : '');
$clientName = $lead ? $lead->client_name : '';
$countryCode = $lead ? ($lead->country_code ?: '+91') : '+91';
$mobile = $lead ? $lead->mobile : '';
$whatsapp = $lead ? $lead->whatsapp : '';
$email = $lead ? $lead->client_email : '';
$companyName = $lead ? $lead->company_name : '';
$website = $lead ? $lead->website : '';
$address = $lead ? $lead->address : '';
$requirementType = $lead ? $lead->client_requirement : 'Website';
$websiteType = $lead ? ($lead->website_type ?: $lead->app_type) : '';
$describeReq = $lead ? $lead->describe_requirement : '';
$notes = $lead ? $lead->note : '';
$sourceId = $lead ? $lead->source_id : '';
$agentUserId = $lead ? ($lead->agent_id ?: $lead->lead_owner) : $currentUser->id;
@endphp

<style>
    .crm-section-card {
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        border: 1px solid #e2e8f0;
        margin-bottom: 24px;
        padding: 24px;
    }
    .crm-card-blue { border-left: 5px solid #007bff !important; }
    .crm-card-cyan { border-left: 5px solid #17a2b8 !important; }
    .crm-card-green { border-left: 5px solid #28a745 !important; }
    .crm-card-orange { border-left: 5px solid #fd7e14 !important; }

    .crm-section-title {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 1px solid #e2e8f0;
        display: flex;
        align-items: center;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .crm-section-title i { margin-right: 10px; font-size: 18px; }
    .crm-card-blue .crm-section-title { color: #007bff; }
    .crm-card-cyan .crm-section-title { color: #17a2b8; }
    .crm-card-green .crm-section-title { color: #28a745; }
    .crm-card-orange .crm-section-title { color: #fd7e14; }

    .form-group {
        margin-bottom: 18px !important;
        position: relative;
    }
    .form-group label, .form-label-custom {
        font-weight: 600 !important;
        color: #334155 !important;
        font-size: 13px !important;
        margin-bottom: 6px !important;
        display: block !important;
    }
    .form-control, .bootstrap-select .btn, .bootstrap-select button {
        height: 42px !important;
        line-height: 1.5 !important;
        border-radius: 6px !important;
        border: 1px solid #cbd5e1 !important;
        font-size: 14px !important;
        background-color: #ffffff !important;
        color: #1e293b !important;
        box-shadow: none !important;
    }
    .form-control:focus, .bootstrap-select .btn:focus {
        border-color: #3b82f6 !important;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15) !important;
    }

    .is-invalid-custom {
        border: 2px solid #ef4444 !important;
        background-color: #fef2f2 !important;
        box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.15) !important;
    }
    .field-error-msg {
        font-weight: 600 !important;
        color: #dc2626 !important;
    }
</style>

<div class="row">
    <div class="col-sm-12">
        <x-form id="save-lead-data-form">
            <input type="hidden" name="lead_contact_id" value="{{ $leadContactId ?? '' }}">
            <input type="hidden" name="lead_contact" value="{{ $leadContactId ?? '' }}">
            <input type="hidden" name="pipeline" value="1">
            <input type="hidden" name="stage_id" value="1">
            <input type="hidden" name="close_date" value="{{ now()->addDays(14)->format('d-m-Y') }}">

            <!-- A) CONTACT DETAILS -->
            <div class="crm-section-card crm-card-blue">
                <div class="crm-section-title">
                    <i class="fa fa-user-circle"></i> A) Contact Details
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <label>Deal ID</label>
                        <input type="text" class="form-control bg-light" name="deal_code" value="{{ $dealCode }}" readonly>
                    </div>

                    <div class="col-lg-4 col-md-6 form-group">
                        <label>Lead / Client Name *</label>
                        <input type="text" class="form-control" name="client_name" id="client_name" value="{{ $clientName }}" placeholder="Enter Client Name" required>
                    </div>

                    <div class="col-lg-4 col-md-6 form-group">
                        <label>Deal Name *</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $defaultName }}" placeholder="Enter Deal Name" required>
                    </div>

                    <div class="col-lg-4 col-md-6 form-group">
                        <label>Mobile Number *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <select class="form-control" name="country_code" style="width: 90px;">
                                    <option value="+91" @selected($countryCode == '+91')>+91 (IN)</option>
                                    <option value="+1" @selected($countryCode == '+1')>+1 (US)</option>
                                    <option value="+44" @selected($countryCode == '+44')>+44 (UK)</option>
                                    <option value="+971" @selected($countryCode == '+971')>+971 (UAE)</option>
                                </select>
                            </div>
                            <input type="text" class="form-control" name="mobile" id="mobile" value="{{ $mobile }}" placeholder="10 Digit Mobile Number" maxlength="10" required>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 form-group">
                        <label>WhatsApp Number</label>
                        <input type="text" class="form-control" name="whatsapp" id="whatsapp" value="{{ $whatsapp }}" placeholder="Enter WhatsApp Number" maxlength="10">
                    </div>

                    <div class="col-lg-4 col-md-6 form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="client_email" id="client_email" value="{{ $email }}" placeholder="e.g. client@branzo.in">
                    </div>

                    <div class="col-lg-6 col-md-6 form-group">
                        <label>Lead Source</label>
                        <select class="form-control select-picker" name="source_id" id="source_id" data-live-search="true">
                            <option value="">-- Select Source --</option>
                            @foreach ($sources as $src)
                                <option value="{{ $src->id }}" @selected($sourceId == $src->id)>{{ $src->type }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-6 col-md-6 form-group">
                        <label>Lead Agent / Owner</label>
                        <select class="form-control select-picker" name="agent_id" id="agent_id" data-live-search="true">
                            @foreach ($leadAgents as $agent)
                                <option value="{{ $agent->user->id }}" @selected($agentUserId == $agent->user->id)>{{ $agent->user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <!-- B) COMPANY INFORMATION -->
            <div class="crm-section-card crm-card-cyan">
                <div class="crm-section-title">
                    <i class="fa fa-building"></i> B) Company Information
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <label>Company Name</label>
                        <input type="text" class="form-control" name="company_name" id="company_name" value="{{ $companyName }}" placeholder="Enter Company Name">
                    </div>

                    <div class="col-lg-4 col-md-6 form-group">
                        <label>Company Website</label>
                        <input type="text" class="form-control" name="website" id="website" value="{{ $website }}" placeholder="https://example.com">
                    </div>

                    <div class="col-lg-4 col-md-12 form-group">
                        <label>Company Address</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{ $address }}" placeholder="Enter Company Address">
                    </div>
                </div>
            </div>

            <!-- C) REQUIREMENT DETAILS -->
            <div class="crm-section-card crm-card-green">
                <div class="crm-section-title">
                    <i class="fa fa-cogs"></i> C) Requirement Details
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <label>Requirement Type *</label>
                        <select class="form-control select-picker" name="client_requirement" id="client_requirement">
                            <option value="Website" @selected($requirementType == 'Website')>Website</option>
                            <option value="Mobile App" @selected($requirementType == 'Mobile App')>Mobile App</option>
                            <option value="Software" @selected($requirementType == 'Software')>Software</option>
                            <option value="Digital Marketing" @selected($requirementType == 'Digital Marketing')>Digital Marketing</option>
                            <option value="SEO" @selected($requirementType == 'SEO')>SEO</option>
                            <option value="CRM" @selected($requirementType == 'CRM')>CRM</option>
                            <option value="ERP" @selected($requirementType == 'ERP')>ERP</option>
                            <option value="Other" @selected($requirementType == 'Other')>Other</option>
                        </select>
                    </div>

                    <div class="col-lg-4 col-md-6 form-group">
                        <label>Specification / Sub-Type</label>
                        <input type="text" class="form-control" name="website_type" id="website_type" value="{{ $websiteType }}" placeholder="e.g. E-Commerce / Android & iOS">
                    </div>

                    <div class="col-lg-4 col-md-12 form-group">
                        <label>Technology Preference / Specifications</label>
                        <input type="text" class="form-control" name="describe_requirement" id="describe_requirement" value="{{ $describeReq }}" placeholder="e.g. Laravel + Vue / Flutter">
                    </div>

                    <div class="col-lg-12 form-group">
                        <label>Initial Notes</label>
                        <textarea class="form-control" name="note" id="note" rows="2" placeholder="Initial lead notes...">{{ $notes }}</textarea>
                    </div>
                </div>
            </div>

            <!-- D) DEAL FOLLOW-UP MANAGEMENT -->
            <div class="crm-section-card crm-card-orange">
                <div class="crm-section-title">
                    <i class="fa fa-paper-plane"></i> D) Deal Follow-up Management
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <label>Deal Stage *</label>
                        <select class="form-control select-picker" name="follow_up_stage" id="follow_up_stage">
                            <option value="New Lead">New Lead</option>
                            <option value="Follow Up 1" selected>Follow Up 1</option>
                            <option value="Follow Up 2">Follow Up 2</option>
                            <option value="Follow Up 3">Follow Up 3</option>
                            <option value="Won / Confirmed">Won / Confirmed</option>
                            <option value="Lost">Lost</option>
                        </select>
                    </div>

                    <div class="col-lg-4 col-md-6 form-group" id="next_date_group">
                        <label>Next Follow-up Date *</label>
                        <input type="date" class="form-control" name="next_follow_up_date" id="next_follow_up_date" value="{{ now()->addDays(3)->format('Y-m-d') }}">
                    </div>

                    <div class="col-lg-4 col-md-6 form-group">
                        <label>Deal Value (₹)</label>
                        <input type="number" class="form-control" name="value" id="value" value="0" placeholder="0.00">
                    </div>

                    <div class="col-lg-12 form-group">
                        <label>Follow-up Notes / Remarks *</label>
                        <textarea class="form-control" name="remark" id="remark" rows="3" placeholder="Enter mandatory follow-up notes before saving..." required></textarea>
                        <small class="text-muted">Both Next Follow-up Date and Notes are mandatory to save the deal.</small>
                    </div>
                </div>
            </div>

            <x-form-actions>
                <x-forms.button-primary id="save-lead-form" class="mr-3" icon="check">@lang('app.save')</x-forms.button-primary>
                <x-forms.button-cancel :link="route('lead-contact.index')" class="border-0">@lang('app.cancel')</x-forms.button-cancel>
            </x-form-actions>
        </x-form>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#save-lead-form').off('click').on('click', function (e) {
            e.preventDefault();

            // Clear previous validation styling
            $('.is-invalid-custom').removeClass('is-invalid-custom');
            $('.field-error-msg').remove();

            var hasError = false;
            var firstErrorField = null;

            function markInvalid(element, message) {
                element.addClass('is-invalid-custom');
                element.closest('.form-group').append('<span class="text-danger f-12 mt-1 d-block field-error-msg"><i class="fa fa-exclamation-circle mr-1"></i> ' + message + '</span>');
                if (!firstErrorField) {
                    firstErrorField = element;
                }
                hasError = true;
            }

            // 1. Client Name
            var clientName = $('#client_name').val().trim();
            if (!clientName) {
                markInvalid($('#client_name'), 'Lead / Client Name is required');
            }

            // 2. Deal Name
            var dealName = $('#name').val().trim();
            if (!dealName) {
                markInvalid($('#name'), 'Deal Name is required');
            }

            // 3. Mobile Number
            var mobile = $('#mobile').val().trim();
            if (!mobile) {
                markInvalid($('#mobile'), 'Mobile Number is required');
            } else if (mobile.length !== 10 || !/^\d+$/.test(mobile)) {
                markInvalid($('#mobile'), 'Mobile Number must be exactly 10 digits');
            }

            // 4. Follow-up Stage
            var stage = $('#follow_up_stage').val();
            if (!stage) {
                markInvalid($('#follow_up_stage'), 'Deal Stage is required');
            }

            // 5. Next Follow-up Date (Mandatory for Follow Up stages)
            var nextDate = $('#next_follow_up_date').val();
            if (['Follow Up 1', 'Follow Up 2', 'Follow Up 3'].indexOf(stage) !== -1 && !nextDate) {
                markInvalid($('#next_follow_up_date'), 'Please select next follow-up date');
            }

            // 6. Mandatory Notes / Remarks
            var remark = $('#remark').val().trim();
            if (!remark) {
                markInvalid($('#remark'), 'Follow-up Notes is required');
            }

            if (hasError) {
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    text: 'Please fill all mandatory fields highlighted in red.',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#ef4444'
                });

                if (firstErrorField) {
                    firstErrorField.focus();
                    firstErrorField[0].scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
                return false;
            }

            const url = "{{ route('deals.store') }}";
            var data = $('#save-lead-data-form').serialize();

            $.easyAjax({
                url: url,
                container: '#save-lead-data-form',
                type: "POST",
                disableButton: true,
                blockUI: true,
                buttonSelector: '#save-lead-form',
                data: data,
                success: function (response) {
                    if (response.status == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Deal created successfully',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function () {
                            window.location.href = response.redirectUrl;
                        });
                    }
                }
            });
        });

        // Real-time input clearing of red border on keyup/change
        $('body').on('keyup change', '.is-invalid-custom', function () {
            var val = $(this).val();
            if (val && val.trim() !== '') {
                $(this).removeClass('is-invalid-custom');
                $(this).closest('.form-group').find('.field-error-msg').remove();
            }
        });

        init(RIGHT_MODAL);
    });
</script>
