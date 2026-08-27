<div class="row">
    <div class="col-sm-12">
        <div class="card border-0 b-shadow-4 rounded-lg bg-white">
            <!-- HEADER -->
            <div class="card-header bg-white border-bottom-grey py-3 px-4 d-flex justify-content-between align-items-center">
                <h4 class="f-18 font-weight-bold text-darkest-grey mb-0 d-flex align-items-center">
                    <div class="rounded-circle text-primary font-weight-bold d-inline-flex align-items-center justify-content-center mr-3 shadow-xs" style="width: 40px; height: 40px; background-color: #EFF6FF;">
                        <i class="fa fa-user-plus text-primary f-18"></i>
                    </div>
                    Convert Deal to Client
                </h4>
                <button type="button" class="close text-dark-grey" data-dismiss="modal" aria-label="Close" onclick="if (typeof closeRightModal === 'function') { closeRightModal(); } else if (typeof MODAL_LG !== 'undefined') { $(MODAL_LG).modal('hide'); } else { window.location.href = '{{ route('deals.index') }}'; }">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="card-body p-4 bg-light">
                <form id="convertDealToClientForm" method="POST" action="{{ route('deals.convert_to_client_store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="deal_id" value="{{ $deal->id }}">

                    <!-- DEAL SUMMARY CARD AT TOP -->
                    <div class="card border-0 b-shadow-4 rounded-lg mb-4 bg-white">
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-primary px-3 py-2 font-weight-bold f-13 rounded-pill mr-3 shadow-xs" style="background-color: #2563EB;">
                                            [BZ{{ str_pad($deal->id, 3, '0', STR_PAD_LEFT) }}]
                                        </span>
                                        <div>
                                            <h3 class="f-16 font-weight-bold text-darkest-grey mb-1">{{ $deal->name }}</h3>
                                            <span class="f-12 text-dark-grey">
                                                <i class="fa fa-layer-group text-primary mr-1"></i>Pipeline: {{ $deal->pipeline?->name ?: 'Business Pipeline' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex flex-wrap align-items-center justify-content-md-end gap-3">
                                    <!-- Deal Agent Avatar + Name -->
                                    <div class="d-flex align-items-center mr-4">
                                        <img src="{{ $deal->leadAgent?->user?->image_url ?: 'https://ui-avatars.com/api/?name=' . urlencode($deal->leadAgent?->user?->name ?: user()->name) }}" class="rounded-circle mr-2 border shadow-xs" width="38" height="38" alt="Agent">
                                        <div>
                                            <span class="f-11 text-lightest d-block font-weight-semibold">Deal Agent</span>
                                            <span class="f-13 font-weight-bold text-darkest-grey">{{ $deal->leadAgent?->user?->name ?: user()->name }}</span>
                                        </div>
                                    </div>

                                    <!-- Current Stage -->
                                    <div>
                                        <span class="f-11 text-lightest d-block font-weight-semibold">Current Stage</span>
                                        <span class="badge px-3 py-1 font-weight-bold f-12 rounded-pill text-white shadow-xs" style="background-color: #3B82F6;">
                                            {{ $deal->leadStage?->name ?: 'New Lead' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 1. CLIENT INFORMATION SECTION -->
                    <div class="card border-0 b-shadow-4 rounded-lg mb-4 bg-white">
                        <div class="card-header bg-white border-bottom-grey py-3 px-4 font-weight-bold f-15 text-darkest-grey">
                            <i class="fa fa-user-circle text-primary mr-2"></i>Client Information
                        </div>
                        <div class="card-body p-4">
                            <div class="row">
                                <!-- Client Name * -->
                                <div class="col-md-6 mb-3">
                                    <x-forms.text fieldId="name" fieldLabel="Client Name" fieldName="name"
                                        fieldRequired="true" :fieldValue="$deal->contact?->contact_name ?: ($deal->contact?->client_name ?: $deal->client_name) ?: $deal->name" fieldPlaceholder="Client Contact Person Name"/>
                                </div>

                                <!-- Company Name * -->
                                <div class="col-md-6 mb-3">
                                    <x-forms.text fieldId="company_name" fieldLabel="Company Name" fieldName="company_name"
                                        fieldRequired="true" :fieldValue="$deal->contact?->company_name ?: $deal->company_name" fieldPlaceholder="Company Name"/>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6 mb-3">
                                    <x-forms.text fieldId="email" fieldLabel="Email Address" fieldName="email"
                                        :fieldValue="$deal->contact?->client_email ?: $deal->client_email" fieldPlaceholder="client@company.com"/>
                                </div>

                                <!-- Mobile Number * -->
                                <div class="col-md-6 mb-3">
                                    <x-forms.text fieldId="mobile" fieldLabel="Mobile Number" fieldName="mobile"
                                        fieldRequired="true" :fieldValue="$deal->contact?->mobile ?: $deal->mobile" fieldPlaceholder="+91 9876543210"/>
                                </div>

                                <!-- WhatsApp Number -->
                                <div class="col-md-6 mb-3">
                                    <x-forms.text fieldId="whatsapp" fieldLabel="WhatsApp Number" fieldName="whatsapp"
                                        :fieldValue="$deal->contact?->mobile ?: $deal->mobile" fieldPlaceholder="+91 9876543210"/>
                                </div>

                                <!-- Website -->
                                <div class="col-md-6 mb-3">
                                    <x-forms.text fieldId="website" fieldLabel="Website" fieldName="website"
                                        :fieldValue="$deal->contact?->website ?: $deal->website" fieldPlaceholder="https://example.com"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2. ADDRESS SECTION -->
                    <div class="card border-0 b-shadow-4 rounded-lg mb-4 bg-white">
                        <div class="card-header bg-white border-bottom-grey py-3 px-4 font-weight-bold f-15 text-darkest-grey">
                            <i class="fa fa-map-marker-alt text-primary mr-2"></i>Address Details
                        </div>
                        <div class="card-body p-4">
                            <div class="row">
                                <!-- Address -->
                                <div class="col-md-12 mb-3">
                                    <x-forms.textarea fieldId="address" fieldLabel="Address" fieldName="address"
                                        :fieldValue="$deal->contact?->address ?: $deal->address" fieldPlaceholder="Full office address..."/>
                                </div>

                                <!-- Country -->
                                <div class="col-md-3 mb-3">
                                    <x-forms.select fieldId="country_id" fieldLabel="Country" fieldName="country_id" search="true">
                                        <option value="">-- Select Country --</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}" {{ ($deal->contact?->country_id == $country->id || $country->iso == 'IN') ? 'selected' : '' }}>
                                                {{ $country->nicename }}
                                            </option>
                                        @endforeach
                                    </x-forms.select>
                                </div>

                                <!-- State -->
                                <div class="col-md-3 mb-3">
                                    <x-forms.text fieldId="state" fieldLabel="State" fieldName="state"
                                        :fieldValue="$deal->contact?->state ?: $deal->state" fieldPlaceholder="State"/>
                                </div>

                                <!-- City -->
                                <div class="col-md-3 mb-3">
                                    <x-forms.text fieldId="city" fieldLabel="City" fieldName="city"
                                        :fieldValue="$deal->contact?->city ?: $deal->city" fieldPlaceholder="City"/>
                                </div>

                                <!-- Pincode -->
                                <div class="col-md-3 mb-3">
                                    <x-forms.text fieldId="postal_code" fieldLabel="Pincode / Zip Code" fieldName="postal_code"
                                        :fieldValue="$deal->contact?->postal_code" fieldPlaceholder="600001"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3. BUSINESS INFORMATION SECTION -->
                    <div class="card border-0 b-shadow-4 rounded-lg mb-4 bg-white">
                        <div class="card-header bg-white border-bottom-grey py-3 px-4 font-weight-bold f-15 text-darkest-grey">
                            <i class="fa fa-briefcase text-primary mr-2"></i>Business Information
                        </div>
                        <div class="card-body p-4">
                            <div class="row">
                                <!-- Requirement Type -->
                                <div class="col-md-6 mb-3">
                                    <x-forms.text fieldId="requirement_type" fieldLabel="Requirement Type" fieldName="requirement_type"
                                        :fieldValue="$deal->pipeline?->name ?: 'General Requirement'"/>
                                </div>

                                <!-- Service / Product -->
                                <div class="col-md-6 mb-3">
                                    <x-forms.text fieldId="service_purchased" fieldLabel="Service / Product" fieldName="service_purchased"
                                        :fieldValue="$deal->pipeline?->name ?: 'Enterprise Software'"/>
                                </div>

                                <!-- Industry -->
                                <div class="col-md-6 mb-3">
                                    <x-forms.text fieldId="industry" fieldLabel="Industry" fieldName="industry"
                                        fieldPlaceholder="Information Technology, SaaS, SME"/>
                                </div>

                                <!-- Source -->
                                <div class="col-md-6 mb-3">
                                    <x-forms.text fieldId="deal_source" fieldLabel="Source" fieldName="deal_source"
                                        :fieldValue="$deal->category?->category_name ?: 'Direct Lead'"/>
                                </div>

                                <!-- Notes -->
                                <div class="col-md-12 mb-3">
                                    <x-forms.textarea fieldId="note" fieldLabel="Notes / Project Specifications" fieldName="note"
                                        :fieldValue="$deal->note" fieldPlaceholder="Enter additional notes or client requirements..."/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4. CLIENT DOCUMENTS VAULT SECTION -->
                    <div class="card border-0 b-shadow-4 rounded-lg mb-4 bg-white">
                        <div class="card-header bg-white border-bottom-grey py-3 px-4 d-flex justify-content-between align-items-center">
                            <h4 class="f-15 font-weight-bold text-darkest-grey mb-0">
                                <i class="fa fa-folder-open text-primary mr-2"></i>Client Documents Vault
                            </h4>
                            <span class="badge badge-light border px-2 py-1 f-12 text-dark-grey">Multiple Files Allowed</span>
                        </div>
                        <div class="card-body p-4">
                            <!-- Category Selection & Upload Zone -->
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label class="font-weight-bold f-13 text-dark-grey">Select Document Type / Category</label>
                                    <select id="doc_category_selector" class="form-control height-35 f-14">
                                        <option value="Company Registration" selected>Company Registration</option>
                                        <option value="GST Certificate">GST Certificate</option>
                                        <option value="PAN Card">PAN Card</option>
                                        <option value="Agreement">Agreement</option>
                                        <option value="Contract">Contract</option>
                                        <option value="Quotation">Quotation</option>
                                        <option value="Invoice">Invoice</option>
                                        <option value="Other Documents">Other Documents</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3 d-flex align-items-end">
                                    <button type="button" class="btn btn-primary px-4 font-weight-bold rounded-pill shadow-xs w-100 style-button" style="background-color: #2563EB; height: 38px;" onclick="document.getElementById('client_document_files').click()">
                                        <i class="fa fa-cloud-upload-alt mr-2"></i>Select & Attach Documents
                                    </button>
                                </div>

                                <!-- Drag & Drop Dropzone -->
                                <div class="col-md-12">
                                    <div class="border-2 border-dashed rounded-lg p-4 text-center bg-light cursor-pointer position-relative" style="border: 2px dashed #CBD5E1; border-radius: 12px;" onclick="document.getElementById('client_document_files').click()">
                                        <i class="fa fa-cloud-upload-alt text-primary f-36 mb-2"></i>
                                        <h5 class="f-14 font-weight-bold text-darkest-grey mb-1">Drag & Drop Client Documents here or click to browse</h5>
                                        <p class="f-12 text-dark-grey mb-0">Allowed Formats: PDF, DOC, DOCX, XLS, XLSX, JPG, PNG, ZIP (Max 10MB per file)</p>
                                        <input type="file" id="client_document_files" name="documents[]" multiple class="d-none" onchange="renderSelectedDocuments(this)">
                                    </div>
                                </div>
                            </div>

                            <!-- Uploaded / Selected Document Cards -->
                            <div id="uploaded-documents-list" class="row mt-3">
                                <!-- Dynamic document cards rendered via JS -->
                            </div>
                        </div>
                    </div>

                    <!-- 5. DEAL INFORMATION SECTION (READONLY AUDIT TRAIL) -->
                    <div class="card border-0 b-shadow-4 rounded-lg mb-4 bg-white">
                        <div class="card-header bg-white border-bottom-grey py-3 px-4 font-weight-bold f-15 text-darkest-grey">
                            <i class="fa fa-file-invoice text-primary mr-2"></i>Deal Reference Information
                        </div>
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <x-forms.text fieldId="deal_id_display" fieldLabel="Deal ID" fieldName="deal_id_display"
                                        :fieldValue="'BZ' . str_pad($deal->id, 3, '0', STR_PAD_LEFT)" fieldReadOnly="true"/>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <x-forms.text fieldId="deal_name_display" fieldLabel="Deal Name" fieldName="deal_name_display"
                                        :fieldValue="$deal->name" fieldReadOnly="true"/>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <x-forms.text fieldId="converted_by" fieldLabel="Converted By" fieldName="converted_by"
                                        :fieldValue="user()->name" fieldReadOnly="true"/>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <x-forms.text fieldId="conversion_date" fieldLabel="Conversion Date" fieldName="conversion_date"
                                        :fieldValue="now()->format('d M Y')" fieldReadOnly="true"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- BOTTOM FIXED ACTION AREA -->
            <div class="card-footer bg-white border-top-grey py-3 px-4 d-flex justify-content-end align-items-center">
                <button type="button" class="btn btn-secondary px-4 py-2 font-weight-bold rounded-pill mr-3" onclick="handleCancelConvert()">Cancel</button>
                <button type="submit" class="btn btn-success text-white px-4 py-2 font-weight-bold rounded-pill shadow-xs" id="save-convert-deal-btn" style="background-color: #10B981; border: none;">
                    <i class="fa fa-user-check mr-2"></i>Convert Client
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function handleCancelConvert() {
        if (typeof closeRightModal === "function") {
            closeRightModal();
        }
        if (typeof MODAL_LG !== "undefined" && $(MODAL_LG).length) {
            $(MODAL_LG).modal("hide");
        }
        window.location.href = "{{ route("deals.index") }}";
    }

    function renderSelectedDocuments(input) {
        var container = $("#uploaded-documents-list");
        var selectedCat = $("#doc_category_selector").val() || "Company Registration";

        if (input.files && input.files.length > 0) {
            for (var i = 0; i < input.files.length; i++) {
                var file = input.files[i];
                var sizeMb = (file.size / (1024 * 1024)).toFixed(2) + " MB";
                var iconClass = "fa-file-pdf text-danger";

                if (file.type.includes("image")) {
                    iconClass = "fa-file-image text-primary";
                } else if (file.name.includes(".doc") || file.name.includes(".docx")) {
                    iconClass = "fa-file-word text-info";
                } else if (file.name.includes(".xls") || file.name.includes(".xlsx")) {
                    iconClass = "fa-file-excel text-success";
                } else if (file.name.includes(".zip")) {
                    iconClass = "fa-file-archive text-warning";
                }

                var cardHtml = '<div class="col-md-6 mb-3 doc-card-item" id="doc_item_' + i + '">' +
                    '<div class="card border rounded-lg bg-white p-3 shadow-xs">' +
                        '<input type="hidden" name="document_category[]" value="' + selectedCat + '">' +
                        '<div class="d-flex align-items-center justify-content-between">' +
                            '<div class="d-flex align-items-center">' +
                                '<i class="fa ' + iconClass + ' f-28 mr-3"></i>' +
                                '<div>' +
                                    '<span class="badge badge-light border px-2 py-1 f-11 text-dark-grey font-weight-bold mb-1">' + selectedCat + '</span>' +
                                    '<h6 class="f-13 font-weight-bold text-darkest-grey mb-0 text-truncate" style="max-width: 180px;">' + file.name + '</h6>' +
                                    '<small class="text-dark-grey f-11">Size: ' + sizeMb + ' | Date: {{ now()->format('d M Y') }}</small>' +
                                '</div>' +
                            '</div>' +
                            '<div class="d-flex align-items-center gap-2">' +
                                '<span class="btn btn-sm btn-light border rounded-circle mr-1" title="Attached Ready for Save"><i class="fa fa-check text-success f-12"></i></span>' +
                                '<button type="button" class="btn btn-sm btn-light border text-danger rounded-circle" onclick="removeDocCard(' + i + ')" title="Delete"><i class="fa fa-trash f-12"></i></button>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>';

                container.append(cardHtml);
            }
        }
    }

    function removeDocCard(index) {
        $("#doc_item_" + index).remove();
    }

    $(document).ready(function() {
        $("body").off("click", "#save-convert-deal-btn").on("click", "#save-convert-deal-btn", function (e) {
            e.preventDefault();
            var url = "{{ route("deals.convert_to_client_store") }}";

            $.easyAjax({
                url: url,
                container: "#convertDealToClientForm",
                type: "POST",
                disableButton: true,
                buttonSelector: "#save-convert-deal-btn",
                file: true,
                success: function (response) {
                    if (response.status === "success") {
                        if (typeof toastr !== "undefined") {
                            toastr.success(response.message || "Deal converted to Client successfully");
                        }
                        if (typeof closeRightModal === "function") {
                            closeRightModal();
                        }
                        if (typeof MODAL_LG !== "undefined" && $(MODAL_LG).length) {
                            $(MODAL_LG).modal("hide");
                        }
                        setTimeout(function () {
                            if (response.redirect_url) {
                                window.location.href = response.redirect_url;
                            } else {
                                window.location.href = "{{ route("clients.index") }}";
                            }
                        }, 500);
                    }
                }
            });
        });
    });
</script>