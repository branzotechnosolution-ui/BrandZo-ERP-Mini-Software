<div class="row">
    <div class="col-sm-12">
        <x-form id="save-intern-data-form">
            <div class="add-client bg-white rounded">
                <h4 class="mb-0 p-20 f-21 font-weight-normal text-capitalize border-bottom-grey">
                    Add Intern Information
                </h4>
                <div class="row p-20">
                    <div class="col-md-6">
                        <x-forms.text fieldId="full_name" :fieldLabel="__('Full Name')"
                            fieldName="full_name" fieldRequired="true"
                            fieldPlaceholder="e.g. Rahul Sharma">
                        </x-forms.text>
                    </div>
                    <div class="col-md-6">
                        <x-forms.text fieldId="email" :fieldLabel="__('Email Address')"
                            fieldName="email" fieldRequired="true"
                            fieldPlaceholder="e.g. rahul@example.com">
                        </x-forms.text>
                    </div>
                    <div class="col-md-6">
                        <x-forms.text fieldId="phone" :fieldLabel="__('Phone Number')"
                            fieldName="phone" fieldRequired="true"
                            fieldPlaceholder="e.g. +91 9876543210">
                        </x-forms.text>
                    </div>
                    <div class="col-md-6">
                        <x-forms.text fieldId="college_name" :fieldLabel="__('College / University')"
                            fieldName="college_name" fieldRequired="true"
                            fieldPlaceholder="e.g. IIT Delhi">
                        </x-forms.text>
                    </div>
                    <div class="col-md-6">
                        <x-forms.text fieldId="department" :fieldLabel="__('Department / Course')"
                            fieldName="department" fieldRequired="true"
                            fieldPlaceholder="e.g. Computer Science & Engg">
                        </x-forms.text>
                    </div>
                    <div class="col-md-6">
                        <x-forms.text fieldId="mentor_name" :fieldLabel="__('Assigned Mentor')"
                            fieldName="mentor_name" fieldRequired="false"
                            fieldPlaceholder="e.g. Senior Tech Lead">
                        </x-forms.text>
                    </div>
                    <div class="col-md-6">
                        <x-forms.datepicker fieldId="start_date" :fieldLabel="__('Start Date')"
                            fieldName="start_date" fieldRequired="true"
                            :fieldValue="now()->format('Y-m-d')">
                        </x-forms.datepicker>
                    </div>
                    <div class="col-md-6">
                        <x-forms.datepicker fieldId="end_date" :fieldLabel="__('End Date')"
                            fieldName="end_date" fieldRequired="true"
                            :fieldValue="now()->addMonths(3)->format('Y-m-d')">
                        </x-forms.datepicker>
                    </div>
                    <div class="col-md-6">
                        <x-forms.select fieldId="status" :fieldLabel="__('Status')" fieldName="status">
                            <option value="applied">Applied</option>
                            <option value="ongoing" selected>Ongoing</option>
                            <option value="completed">Completed</option>
                            <option value="terminated">Terminated</option>
                        </x-forms.select>
                    </div>
                    <div class="col-md-6">
                        <x-forms.file fieldId="resume" :fieldLabel="__('Upload Resume (PDF/DOC)')"
                            fieldName="resume" fieldRequired="false">
                        </x-forms.file>
                    </div>
                    <div class="col-md-12">
                        <x-forms.textarea fieldId="notes" :fieldLabel="__('Additional Notes / Remarks')"
                            fieldName="notes" fieldPlaceholder="Enter any internship terms, project details or notes...">
                        </x-forms.textarea>
                    </div>
                </div>

                <x-form-actions>
                    <x-forms.button-primary id="save-intern-btn" class="mr-3" icon="check">
                        Save Intern
                    </x-forms.button-primary>
                    <x-forms.button-cancel :link="route('interns.index')" class="border-0">
                        Cancel
                    </x-forms.button-cancel>
                </x-form-actions>
            </div>
        </x-form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#save-intern-btn').click(function() {
            $.easyAjax({
                url: "{{ route('interns.store') }}",
                container: '#save-intern-data-form',
                type: "POST",
                disableButton: true,
                blockUI: true,
                buttonSelector: "#save-intern-btn",
                file: true,
                data: $('#save-intern-data-form').serialize(),
                success: function(response) {
                    if (response.status == 'success') {
                        if ($(RIGHT_MODAL).hasClass('in')) {
                            document.getElementById('right-modal-content').innerHTML = '';
                            $(RIGHT_MODAL).modal('hide');
                            window.location.reload();
                        } else {
                            window.location.href = response.redirectUrl;
                        }
                    }
                }
            });
        });
    });
</script>
