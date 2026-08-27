@php
$viewLeadCategoryPermission = user()->permission('view_lead_category');
$viewLeadSourcesPermission = user()->permission('view_lead_sources');
$addLeadSourcesPermission = user()->permission('add_lead_sources');
$addLeadCategoryPermission = user()->permission('add_lead_category');
$addProductPermission = user()->permission('add_product');
$addLeadAgentPermission = user()->permission('add_lead_agent');
$viewLeadAgentPermission = user()->permission('view_lead_agents');
$addDealPermission = user()->permission('add_deals');

$currentUser = user();
@endphp

<link rel="stylesheet" href="{{ asset('vendor/css/dropzone.min.css') }}">

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
    .crm-card-green { border-left: 5px solid #28a745 !important; }
    .crm-card-cyan { border-left: 5px solid #17a2b8 !important; }
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
    .crm-card-green .crm-section-title { color: #28a745; }
    .crm-card-cyan .crm-section-title { color: #17a2b8; }
    .crm-card-orange .crm-section-title { color: #fd7e14; }

    .form-group {
        margin-bottom: 18px !important;
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
    .mobile-input-group {
        display: flex;
        gap: 8px;
    }
    .country-code-select {
        width: 110px !important;
        flex-shrink: 0;
    }
    .required-star {
        color: #dc3545;
        font-weight: bold;
        margin-left: 2px;
    }
</style>

<div class="row">
    <div class="col-sm-12">
        <x-form id="save-lead-data-form">
            <div class="add-client bg-light rounded p-20">
                
                <div class="bg-white rounded p-20 mb-4 shadow-sm border d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="mb-1 f-21 font-weight-bold text-dark">
                            Enterprise CRM Lead Contact Registration
                        </h4>
                        <p class="text-muted mb-0 f-13">Streamlined Lead Intake & Requirement Capture Engine</p>
                    </div>
                    <div class="text-right">
                        <span class="badge badge-primary px-3 py-2 f-14 font-weight-semibold shadow-sm">
                            <i class="fa fa-hashtag mr-1"></i>Lead ID: {{ $generatedLeadId ?? 'BZ001' }}
                        </span>
                    </div>
                </div>

                <!-- ================= SECTION A: CONTACT DETAILS ================= -->
                <div class="crm-section-card crm-card-blue">
                    <div class="crm-section-title">
                        <i class="fa fa-id-card-o"></i>A) CONTACT DETAILS
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="lead_id_display">Lead ID</label>
                                <input type="text" class="form-control" id="lead_id_display" name="lead_id_display" value="{{ $generatedLeadId ?? 'BZ001' }}" readonly />
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="client_name">Lead Name <span class="required-star">*</span></label>
                                <input type="text" class="form-control" id="client_name" name="client_name" placeholder="e.g. Karthik Mani" />
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="mobile">Mobile Number <span class="required-star">*</span></label>
                                <div class="mobile-input-group">
                                    <select class="form-control select-picker country-code-select" name="country_code" id="country_code" data-live-search="true">
                                        <option value="+91" selected>+91 (IN)</option>
                                        <option value="+1">+1 (US)</option>
                                        <option value="+44">+44 (UK)</option>
                                        <option value="+971">+971 (UAE)</option>
                                        <option value="+65">+65 (SG)</option>
                                        <option value="+61">+61 (AU)</option>
                                        <option value="+49">+49 (DE)</option>
                                        <option value="+966">+966 (SA)</option>
                                        <option value="+60">+60 (MY)</option>
                                    </select>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="10 Digit Mobile No" maxlength="10" pattern="[0-9]{10}" autocomplete="off" />
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="whatsapp">WhatsApp Number</label>
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="e.g. 9876543210" />
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="client_email">Email</label>
                                <input type="email" class="form-control" id="client_email" name="client_email" placeholder="e.g. client@example.com" />
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="source_id">Lead Source</label>
                                <select class="form-control select-picker" name="source_id" id="source_id" data-live-search="true">
                                    <option value="">-- Select Source --</option>
                                    @foreach ($sources as $source)
                                        <option value="{{ $source->id }}">{{ $source->type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="lead_owner">Lead Agent</label>
                                <select class="form-control select-picker" name="lead_owner" id="lead_owner" data-live-search="true">
                                    @foreach ($employees as $emp)
                                        <option value="{{ $emp->id }}" {{ $emp->id == $currentUser->id ? 'selected' : '' }}>
                                            {{ $emp->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ================= SECTION B: REQUIREMENT DETAILS ================= -->
                <div class="crm-section-card crm-card-green">
                    <div class="crm-section-title">
                        <i class="fa fa-cubes"></i>B) REQUIREMENT DETAILS
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="form-group">
                                <label for="client_requirement">Requirement Type <span class="required-star">*</span></label>
                                <select class="form-control select-picker" name="client_requirement" id="client_requirement" data-live-search="true">
                                    <option value="Website" selected>Website</option>
                                    <option value="Mobile App">Mobile App</option>
                                    <option value="Software">Software</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="SEO">SEO</option>
                                    <option value="CRM">CRM</option>
                                    <option value="ERP">ERP</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Dynamic Website Fields (Clean 4-Column Grid) -->
                    <div class="row" id="website_fields_div">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="form-group">
                                <label for="website_type">Website Type</label>
                                <select class="form-control select-picker" name="website_type" id="website_type">
                                    <option value="Business Website" selected>Business Website</option>
                                    <option value="E-Commerce Website">E-Commerce Website</option>
                                    <option value="Portfolio Website">Portfolio Website</option>
                                    <option value="Landing Page">Landing Page</option>
                                    <option value="Booking Website">Booking Website</option>
                                    <option value="Custom Website">Custom Website</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="form-group">
                                <label for="number_of_pages">Number of Pages</label>
                                <input type="text" class="form-control" id="number_of_pages" name="number_of_pages" placeholder="e.g. 10 Pages" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="form-group">
                                <label for="tech_preference">Technology Preference</label>
                                <input type="text" class="form-control" id="tech_preference" name="tech_preference" placeholder="e.g. Laravel / React / WordPress" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="form-group">
                                <label for="reference_website">Reference Website</label>
                                <input type="text" class="form-control" id="reference_website" name="reference_website" placeholder="https://example.com" />
                            </div>
                        </div>
                    </div>

                    <!-- Dynamic Mobile App Fields (Clean 4-Column Grid) -->
                    <div class="row d-none" id="mobile_app_fields_div">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="form-group">
                                <label for="app_type">App Type</label>
                                <select class="form-control select-picker" name="app_type" id="app_type">
                                    <option value="Android App">Android App</option>
                                    <option value="iOS App">iOS App</option>
                                    <option value="Android + iOS App" selected>Android + iOS App</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="form-group">
                                <label for="app_category">App Category</label>
                                <input type="text" class="form-control" id="app_category" name="app_category" placeholder="e.g. E-Commerce / Delivery" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="form-group">
                                <label for="required_features">Required Features</label>
                                <input type="text" class="form-control" id="required_features" name="required_features" placeholder="e.g. Push Notifications, Payment" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="form-group">
                                <label for="reference_app">Reference App</label>
                                <input type="text" class="form-control" id="reference_app" name="reference_app" placeholder="e.g. Swiggy / Uber" />
                            </div>
                        </div>
                    </div>

                    <!-- Dynamic Software Fields (Clean 4-Column Grid) -->
                    <div class="row d-none" id="software_fields_div">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="form-group">
                                <label for="software_type">Software Type</label>
                                <select class="form-control select-picker" name="software_type" id="software_type">
                                    <option value="CRM Software" selected>CRM Software</option>
                                    <option value="ERP Software">ERP Software</option>
                                    <option value="HRMS Software">HRMS Software</option>
                                    <option value="Billing Software">Billing Software</option>
                                    <option value="Custom Software">Custom Software</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="form-group">
                                <label for="platform">Platform</label>
                                <input type="text" class="form-control" id="platform" name="platform" placeholder="e.g. Web / Desktop / Cloud" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="form-group">
                                <label for="user_count">User Count</label>
                                <input type="number" class="form-control" id="user_count" name="user_count" placeholder="e.g. 50 Users" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="form-group">
                                <label for="software_required_features">Required Features</label>
                                <input type="text" class="form-control" id="software_required_features" name="software_required_features" placeholder="e.g. Multi-currency, Reports" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ================= SECTION C: COMPANY INFORMATION ================= -->
                <div class="crm-section-card crm-card-cyan">
                    <div class="crm-section-title">
                        <i class="fa fa-building-o"></i>C) COMPANY INFORMATION
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="company_name">Company Name <span class="required-star">*</span></label>
                                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="e.g. BrandZo Enterprise" />
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="text" class="form-control" id="website" name="website" placeholder="e.g. https://brandzo.in" />
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <select class="form-control select-picker" name="country" id="country" data-live-search="true">
                                    <option value="India" selected>India</option>
                                    <option value="United States">United States</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="state">State</label>
                                <select class="form-control select-picker" name="state" id="state" data-live-search="true">
                                    <option value="Tamil Nadu" selected>Tamil Nadu</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="West Bengal">West Bengal</option>
                                    <option value="Other State">Other State</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="city">City</label>
                                <select class="form-control select-picker" name="city" id="city" data-live-search="true">
                                    <option value="Chennai" selected>Chennai</option>
                                    <option value="Madurai">Madurai</option>
                                    <option value="Dindigul">Dindigul</option>
                                    <option value="Coimbatore">Coimbatore</option>
                                    <option value="Trichy">Trichy</option>
                                    <option value="Salem">Salem</option>
                                    <option value="Tirunelveli">Tirunelveli</option>
                                    <option value="Erode">Erode</option>
                                    <option value="Vellore">Vellore</option>
                                    <option value="Other City">Other City</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group mb-0">
                                <label for="address">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="2" placeholder="Full Corporate / Operating Address" style="height: auto !important;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ================= SECTION D: MANDATORY FOLLOW-UP & NOTES ================= -->
                <div class="crm-section-card crm-card-orange">
                    <div class="crm-section-title">
                        <i class="fa fa-calendar-check-o"></i>D) MANDATORY FOLLOW-UP & NOTES
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="next_follow_up_date">Next Follow Up Date <span class="required-star">*</span></label>
                                <input type="text" class="form-control" id="next_follow_up_date" name="next_follow_up_date" placeholder="Select Date" value="{{ now()->addDays(2)->format(company()->date_format) }}" autocomplete="off" />
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="follow_up_status">Follow-up Status <span class="required-star">*</span></label>
                                <select class="form-control select-picker" name="follow_up_status" id="follow_up_status" data-live-search="true">
                                    <option value="Lead" selected>Lead</option>
                                    <option value="Contacted">Contacted</option>
                                    <option value="Follow-up">Follow-up</option>
                                    <option value="Interested">Interested</option>
                                    <option value="Proposal Sent">Proposal Sent</option>
                                    <option value="Converted">Converted</option>
                                    <option value="Lost">Lost</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group mb-0">
                                <label for="note">Notes <span class="required-star">*</span></label>
                                <textarea class="form-control" id="note" name="note" rows="3" placeholder="Enter detailed requirements, client discussion notes, and follow-up history..." style="height: auto !important;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <x-form-actions class="bg-white p-20 rounded border shadow-sm">
                    <x-forms.button-primary id="save-lead-btn" class="mr-3 px-4 py-2 f-15 font-weight-bold" icon="check">
                        Save Lead Contact
                    </x-forms.button-primary>
                    <x-forms.button-cancel :link="route('lead-contact.index')" class="border-0 px-4 py-2 f-15">
                        Cancel
                    </x-forms.button-cancel>
                </x-form-actions>

            </div>
        </x-form>
    </div>
</div>

<script>
    $(document).ready(function() {
        datepicker('#next_follow_up_date', {
            position: 'bl',
            ...datepickerConfig
        });

        // Strictly Restrict Mobile Input to 10 Digits
        $('#mobile').on('input keyup paste', function() {
            var val = $(this).val().replace(/[^0-9]/g, '');
            if (val.length > 10) {
                val = val.slice(0, 10);
            }
            $(this).val(val);
        });

        // City & State Dependent Lists
        var citiesByState = {
            'Tamil Nadu': ['Chennai', 'Madurai', 'Dindigul', 'Coimbatore', 'Trichy', 'Salem', 'Tirunelveli', 'Erode', 'Vellore', 'Other City'],
            'Kerala': ['Kochi', 'Thiruvananthapuram', 'Kozhikode', 'Thrissur', 'Kollam', 'Palakkad', 'Other City'],
            'Karnataka': ['Bengaluru', 'Mysuru', 'Hubballi', 'Mangaluru', 'Belagavi', 'Other City'],
            'Maharashtra': ['Mumbai', 'Pune', 'Nagpur', 'Nashik', 'Thane', 'Other City'],
            'Delhi': ['New Delhi', 'North Delhi', 'South Delhi', 'Other City'],
            'Telangana': ['Hyderabad', 'Warangal', 'Nizamabad', 'Other City'],
            'Andhra Pradesh': ['Visakhapatnam', 'Vijayawada', 'Guntur', 'Other City'],
            'Gujarat': ['Ahmedabad', 'Surat', 'Vadodara', 'Rajkot', 'Other City'],
            'West Bengal': ['Kolkata', 'Howrah', 'Durgapur', 'Other City'],
            'Other State': ['Other City']
        };

        $('#state').change(function() {
            var selectedState = $(this).val();
            var citySelect = $('#city');
            citySelect.empty();
            
            var cities = citiesByState[selectedState] || ['Other City'];
            $.each(cities, function(i, city) {
                citySelect.append($('<option>', { value: city, text: city }));
            });
            citySelect.selectpicker('refresh');
        });

        // Requirement Type Dynamic Toggle Logic
        $('#client_requirement').change(function() {
            var val = $(this).val();
            $('#website_fields_div, #mobile_app_fields_div, #software_fields_div').addClass('d-none');
            if (val === 'Website') {
                $('#website_fields_div').removeClass('d-none');
            } else if (val === 'Mobile App') {
                $('#mobile_app_fields_div').removeClass('d-none');
            } else if (val === 'Software') {
                $('#software_fields_div').removeClass('d-none');
            }
        });

        // Strict Validation & Submission Handler
        $('#save-lead-btn').click(function(e) {
            e.preventDefault();

            var clientName = $('#client_name').val().trim();
            var mobile = $('#mobile').val().trim();
            var countryCode = $('#country_code').val();
            var companyName = $('#company_name').val().trim();
            var note = $('#note').val().trim();
            var nextFollowUpDate = $('#next_follow_up_date').val();
            var followUpStatus = $('#follow_up_status').val();

            if (!clientName || !mobile || !companyName || !note || !nextFollowUpDate || !followUpStatus) {
                Swal.fire({
                    icon: 'error',
                    title: 'Mandatory Fields Missing',
                    text: 'Please fill in all mandatory fields marked with a red star (*): Lead Name, Mobile Number, Company Name, Next Follow Up Date, Follow-up Status, and Notes.',
                    customClass: { confirmButton: 'btn btn-primary' },
                    buttonsStyling: false
                });
                return false;
            }

            // Exact 10-digit Mobile Number Validation for Indian Country Code (+91)
            if (countryCode === '+91' && mobile.length !== 10) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Invalid Mobile Number',
                    text: 'Mobile number must be exactly 10 digits for Indian phone numbers (+91). Currently entered: ' + mobile.length + ' digits.',
                    customClass: { confirmButton: 'btn btn-primary' },
                    buttonsStyling: false
                });
                return false;
            }

            $.easyAjax({
                url: "/account/lead-contact",
                container: '#save-lead-data-form',
                type: "POST",
                disableButton: true,
                blockUI: true,
                buttonSelector: "#save-lead-btn",
                data: $('#save-lead-data-form').serialize(),
                success: function(response) {
                    if (response.status == 'success') {
                        window.location.href = response.redirectUrl;
                    }
                }
            });
        });
    });
</script>
