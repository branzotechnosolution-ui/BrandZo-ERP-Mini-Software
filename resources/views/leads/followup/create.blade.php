@php
    $dealCode = $deal->deal_code ?: ('BZ' . str_pad($deal->id, 3, '0', STR_PAD_LEFT));
    $clientName = $deal->client_name ?: ($deal->contact?->client_name ?? '--');
    $mobile = $deal->mobile ?: ($deal->contact?->mobile ?? '--');
    $currentStage = $deal->leadStage?->name ?: ($deal->priority ?: 'Follow Up 1');
@endphp

<div class="modal-header bg-light border-bottom p-3">
    <h5 class="modal-title font-weight-bold text-dark" id="modelHeading">
        <i class="fa fa-plus-circle text-primary mr-2"></i> Add Follow Up
    </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>

<div class="modal-body p-3">
    <!-- CUSTOMER SUMMARY CARD INSIDE MODAL -->
    <div class="card border-0 bg-light rounded-lg p-3 mb-3">
        <div class="d-flex flex-wrap justify-content-between align-items-center">
            <div>
                <span class="badge badge-primary px-2 py-1 font-weight-bold f-12 mr-2">{{ $dealCode }}</span>
                <span class="font-weight-bold text-dark f-14">{{ $clientName }}</span>
            </div>
            <div>
                <small class="text-muted mr-1"><i class="fa fa-phone mr-1"></i>Mobile:</small>
                <span class="font-weight-bold text-dark f-13">{{ $mobile }}</span>
            </div>
        </div>
    </div>

    <x-form id="followUpForm" method="POST" class="ajax-form">
        @csrf
        <input type="hidden" name="deal_id" value="{{ $dealID }}">

        <div class="row">
            <!-- ROW 1: STAGE & NEXT FOLLOW-UP DATE -->
            <div class="col-md-6 form-group mb-3">
                <label class="font-weight-bold text-dark f-12 mb-1">Follow-up Stage *</label>
                <select name="follow_up_stage" id="modal_follow_up_stage" class="form-control height-38 f-13 select-picker">
                    <option value="Follow Up 1" @selected(request('stage') == 'Follow Up 1' || $currentStage == 'Follow Up 1')>Follow Up 1</option>
                    <option value="Follow Up 2" @selected(request('stage') == 'Follow Up 2' || $currentStage == 'Follow Up 2')>Follow Up 2</option>
                    <option value="Follow Up 3" @selected(request('stage') == 'Follow Up 3' || $currentStage == 'Follow Up 3')>Follow Up 3</option>
                    <option value="Won / Confirmed" @selected(request('stage') == 'Won / Confirmed' || $currentStage == 'Won / Confirmed')>Won / Confirmed</option>
                    <option value="Lost" @selected(request('stage') == 'Lost' || $currentStage == 'Lost')>Lost</option>
                </select>
            </div>

            <div class="col-md-6 form-group mb-3">
                <x-forms.datepicker fieldId="next_follow_up_date" fieldRequired="true"
                    :fieldLabel="__('modules.lead.leadFollowUp')" fieldName="next_follow_up_date"
                    :fieldValue="now(company()->timezone)->format(company()->date_format)"
                    :fieldPlaceholder="__('placeholders.date')" />
            </div>

            <!-- ROW 2: TIME & REMINDER TOGGLE -->
            <div class="col-md-6 form-group mb-3">
                <div class="bootstrap-timepicker timepicker">
                    <x-forms.text :fieldLabel="__('modules.timeLogs.startTime')" :fieldPlaceholder="__('placeholders.hours')"
                        fieldName="start_time" fieldId="start_time" fieldRequired="true"
                        :fieldValue="now(company()->timezone)->format(company()->time_format)" />
                </div>
            </div>

            <div class="col-md-6 form-group mb-3 d-flex align-items-center mt-4">
                <x-forms.checkbox :fieldLabel="__('modules.tasks.reminder')" fieldName="send_reminder"
                    fieldId="send_reminder" fieldValue="yes" />
            </div>

            <div class="col-lg-12 send_reminder_div d-none mb-3">
                <div class="row">
                    <div class="col-lg-6 mt-1">
                        <x-forms.number class="mr-0 mr-lg-2 mr-md-2"
                            :fieldLabel="__('modules.events.remindBefore')" fieldName="remind_time"
                            fieldId="remind_time" fieldValue="" />
                    </div>
                    <div class="col-md-6 mt-3">
                        <x-forms.select fieldId="remind_type" fieldLabel="" fieldName="remind_type" search="true">
                            <option value="day">@lang('app.day')</option>
                            <option value="hour">@lang('app.hour')</option>
                            <option value="minute">@lang('app.minute')</option>
                        </x-forms.select>
                    </div>
                </div>
            </div>

            <!-- ROW 3: NOTES / REMARKS (MANDATORY) -->
            <div class="col-md-12 form-group mb-2">
                <label class="font-weight-bold text-dark f-12 mb-1">Remark / Notes *</label>
                <textarea name="remark" id="remark" class="form-control f-13" rows="3" placeholder="Enter follow-up conversation notes..." required></textarea>
            </div>
        </div>
    </x-form>
</div>

<div class="modal-footer bg-light p-3">
    <button type="button" class="btn btn-outline-secondary font-weight-bold px-4 height-38 f-13 mr-2" data-dismiss="modal">Cancel</button>
    <button type="button" id="save-followup" class="btn btn-primary font-weight-bold px-4 height-38 f-13">
        <i class="fa fa-check mr-1"></i> Save Follow-up
    </button>
</div>

<script>
    $(document).ready(function() {
        $(".select-picker").selectpicker();

        $('#start_time').timepicker({
            @if (company()->time_format == 'H:i')
                showMeridian: false,
            @endif
        });

        const dp11 = datepicker('#next_follow_up_date', {
            position: 'bl',
            ...datepickerConfig
        });
        dp11.setMin(new Date());

        $('#send_reminder').change(function() {
            $('.send_reminder_div').toggleClass('d-none');
        });

        $('#save-followup').click(function(e) {
            e.preventDefault();
            var remark = $('#remark').val() ? $('#remark').val().trim() : '';
            if (!remark) {
                $('#remark').addClass('is-invalid border-danger');
                Swal.fire({
                    icon: 'error',
                    title: 'Mandatory Field Missing',
                    text: 'Follow-up notes are mandatory before updating stage.'
                });
                return false;
            } else {
                $('#remark').removeClass('is-invalid border-danger');
            }

            $.easyAjax({
                url: "{{ route('deals.follow_up_store') }}",
                container: '#followUpForm',
                type: "POST",
                blockUI: true,
                data: $('#followUpForm').serialize(),
                success: function(response) {
                    if (response.status == "success") {
                        window.location.reload();
                    }
                }
            });
        });
    });
</script>
