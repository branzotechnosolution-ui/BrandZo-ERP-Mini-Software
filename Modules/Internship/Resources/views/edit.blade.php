<div class="row">
    <div class="col-sm-12">
        <x-form id="update-intern-data-form" method="PUT">
            <div class="add-client bg-white rounded">
                <h4 class="mb-0 p-20 f-21 font-weight-normal text-capitalize border-bottom-grey">
                    Update Intern Information
                </h4>
                <div class="row p-20">
                    <div class="col-md-6">
                        <x-forms.text fieldId="full_name" :fieldLabel="__('Full Name')"
                            fieldName="full_name" fieldRequired="true"
                            :fieldValue="$intern->full_name">
                        </x-forms.text>
                    </div>
                    <div class="col-md-6">
                        <x-forms.text fieldId="email" :fieldLabel="__('Email Address')"
                            fieldName="email" fieldRequired="true"
                            :fieldValue="$intern->email">
                        </x-forms.text>
                    </div>
                    <div class="col-md-6">
                        <x-forms.text fieldId="phone" :fieldLabel="__('Phone Number')"
                            fieldName="phone" fieldRequired="true"
                            :fieldValue="$intern->phone">
                        </x-forms.text>
                    </div>
                    <div class="col-md-6">
                        <x-forms.text fieldId="college_name" :fieldLabel="__('College / University')"
                            fieldName="college_name" fieldRequired="true"
                            :fieldValue="$intern->college_name">
                        </x-forms.text>
                    </div>
                    <div class="col-md-6">
                        <x-forms.text fieldId="department" :fieldLabel="__('Department / Course')"
                            fieldName="department" fieldRequired="true"
                            :fieldValue="$intern->department">
                        </x-forms.text>
                    </div>
                    <div class="col-md-6">
                        <x-forms.text fieldId="mentor_name" :fieldLabel="__('Assigned Mentor')"
                            fieldName="mentor_name" fieldRequired="false"
                            :fieldValue="$intern->mentor_name">
                        </x-forms.text>
                    </div>
                    <div class="col-md-6">
                        <x-forms.datepicker fieldId="start_date" :fieldLabel="__('Start Date')"
                            fieldName="start_date" fieldRequired="true"
                            :fieldValue="optional($intern->start_date)->format('Y-m-d')">
                        </x-forms.datepicker>
                    </div>
                    <div class="col-md-6">
                        <x-forms.datepicker fieldId="end_date" :fieldLabel="__('End Date')"
                            fieldName="end_date" fieldRequired="true"
                            :fieldValue="optional($intern->end_date)->format('Y-m-d')">
                        </x-forms.datepicker>
                    </div>
                    <div class="col-md-6">
                        <x-forms.select fieldId="status" :fieldLabel="__('Status')" fieldName="status">
                            <option value="applied" @selected($intern->status == 'applied')>Applied</option>
                            <option value="ongoing" @selected($intern->status == 'ongoing')>Ongoing</option>
                            <option value="completed" @selected($intern->status == 'completed')>Completed</option>
                            <option value="terminated" @selected($intern->status == 'terminated')>Terminated</option>
                        </x-forms.select>
                    </div>
                    <div class="col-md-6">
                        <x-forms.file fieldId="resume" :fieldLabel="__('Update Resume (PDF/DOC)')"
                            fieldName="resume" fieldRequired="false">
                        </x-forms.file>
                        @if ($intern->resume)
                            <div class="mt-2 f-12 text-dark-grey">
                                Current Resume: <a href="{{ asset('user-uploads/interns/' . $intern->resume) }}" target="_blank" class="text-primary"><i class="fa fa-download mr-1"></i> View / Download</a>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-12">
                        <x-forms.textarea fieldId="notes" :fieldLabel="__('Additional Notes / Remarks')"
                            fieldName="notes" :fieldValue="$intern->notes">
                        </x-forms.textarea>
                    </div>
                </div>

                <x-form-actions>
                    <x-forms.button-primary id="update-intern-btn" class="mr-3" icon="check">
                        Update Intern
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
        $('#update-intern-btn').click(function() {
            var url = "{{ route('interns.update', $intern->id) }}";
            $.easyAjax({
                url: url,
                container: '#update-intern-data-form',
                type: "POST",
                disableButton: true,
                blockUI: true,
                buttonSelector: "#update-intern-btn",
                file: true,
                data: $('#update-intern-data-form').serialize(),
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
