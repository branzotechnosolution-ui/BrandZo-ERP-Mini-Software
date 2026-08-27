@php
$viewClientNote = user()->permission('view_deal_note');
$viewProposalPermission = user()->permission('view_lead_proposals');
$viewLeadFilePermission = user()->permission('view_lead_files');
$viewLeadFollowupPermission = user()->permission('view_lead_follow_up');
@endphp

<div id="task-detail-section">

    <!-- 1. ALWAYS RENDER FULL CRM PROFILE CARDS & PIPELINE PROGRESS HEADER -->
    @include('leads.ajax.profile')

    <!-- 2. DYNAMIC TAB SECTION FOR FILES, FOLLOW-UP, PROPOSALS, NOTES, HISTORY -->
    <div class="bg-additional-grey rounded my-4">
        <div class="s-b-inner s-b-notifications bg-white b-shadow-4 rounded p-3">
            <x-tab-section class="deal-tabs">
                @if($viewLeadFilePermission != 'none')
                    <x-tab-item class="ajax-tab files" :active="(request('tab') === 'files')"
                                    :link="route('deals.show', $deal->id).'?tab=files'">@lang('modules.lead.file')</x-tab-item>
                @endif
                @if($viewLeadFollowupPermission != 'none')
                    <x-tab-item class="ajax-tab follow-up" :active="(request('tab') === 'follow-up' || !request('tab') || request('tab') === 'profile')"
                                    :link="route('deals.show', $deal->id).'?tab=follow-up'">@lang('modules.lead.followUp')</x-tab-item>
                @endif
                @if($viewProposalPermission != 'none')
                    <x-tab-item class="ajax-tab proposals" :active="request('tab') === 'proposals'"
                                    :link="route('deals.show', $deal->id).'?tab=proposals'">@lang('modules.lead.proposal')</x-tab-item>
                @endif
                @if ($viewClientNote != 'none')
                    <x-tab-item class="ajax-tab notes" :active="request('tab') === 'notes'"
                                    :link="route('deals.show', $deal->id).'?tab=notes'">@lang('app.notes')</x-tab-item>
                @endif
                @if ($gdpr->enable_gdpr)
                    <x-tab-item class="ajax-tab gdpr" :active="request('tab') === 'gdpr'"
                                :link="route('deals.show', $deal->id).'?tab=gdpr'">@lang('app.menu.gdpr')</x-tab-item>
                @endif
                <x-tab-item class="ajax-tab history" :active="request('tab') === 'history'"
                            :link="route('deals.show', $deal->id).'?tab=history'">@lang('modules.tasks.history')</x-tab-item>
            </x-tab-section>

            <div class="s-b-n-content mt-3">
                <div class="tab-content" id="nav-tabContent">
                    @if($tab == 'leads.ajax.profile')
                        @include('leads.ajax.follow-up')
                    @else
                        @include($tab)
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('vendor/jquery/clipboard.min.js') }}"></script>
    <script>
        var clipboard = new ClipboardJS('.btn-copy');

        clipboard.on('success', function(e) {
            showTable();
            Swal.fire({
                icon: 'success',
                text: '@lang("app.copied")',
                toast: true,
                position: 'top-end',
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: false,
                customClass: {
                    confirmButton: 'btn btn-primary',
                },
                showClass: {
                    popup: 'swal2-noanimation',
                    backdrop: 'swal2-noanimation'
                },
            });
        });

        // Tab click ajax loading
        .on("click", ".deal-tabs .ajax-tab", function(event) {
            event.preventDefault();
            .removeClass('active');
            .addClass('active');

            const requestUrl = this.href;

            $.easyAjax({
                url: requestUrl,
                blockUI: true,
                container: ".tab-content",
                historyPush: true,
                success: function(response) {
                    if (response.status == "success") {
                        .html(response.html);
                    }
                }
            });
        });

        .on('click', '.delete-table-row', function() {
            var id = .data('id');
            Swal.fire({
                title: "@lang('messages.sweetAlertTitle')",
                text: "@lang('messages.recoverRecord')",
                icon: 'warning',
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: "@lang('messages.confirmDelete')",
                cancelButtonText: "@lang('app.cancel')",
                customClass: {
                    confirmButton: 'btn btn-primary mr-3',
                    cancelButton: 'btn btn-secondary'
                },
                showClass: {
                    popup: 'swal2-noanimation',
                    backdrop: 'swal2-noanimation'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = "{{ route('deals.destroy', ':id') }}";
                    url = url.replace(':id', id);
                    var token = "{{ csrf_token() }}";
                    $.easyAjax({
                        type: 'POST',
                        url: url,
                        data: {
                            '_token': token,
                            '_method': 'DELETE'
                        },
                        success: function(response) {
                            if (response.status == "success") {
                                let dealsIndexUrl = "{{ route('deals.index') }}";
                                window.location.href = dealsIndexUrl;
                            }
                        }
                    });
                }
            });
        });
    </script>
</div>
