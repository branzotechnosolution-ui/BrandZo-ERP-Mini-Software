@php
$addClientNotePermission = user()->permission('add_client_note');
@endphp

<!-- ROW START -->
<div class="row pb-5">
    <div class="col-lg-12 col-md-12 mb-4 mb-xl-0 mb-lg-4">
        <!-- Add Task Export Buttons Start -->
        <div class="d-flex justify-content-between action-bar">
            <div id="table-actions" class="d-flex align-items-center">
                @if ($addClientNotePermission == 'all' || $addClientNotePermission == 'added' || $addClientNotePermission == 'both')
                    <x-forms.link-primary :link="route('client-notes.create').'?client='.$client->id"
                        class="mr-3 openRightModal" icon="plus">
                        @lang('modules.client.createNote')
                    </x-forms.link-primary>
                @endif
            </div>

            <x-datatable.actions>
                <div class="select-status mr-3 pl-3">
                    <select name="action_type" class="form-control select-picker" id="quick-action-type" disabled>
                        <option value="">@lang('app.selectAction')</option>
                        <option value="delete">@lang('app.delete')</option>
                    </select>
                </div>
            </x-datatable.actions>


        </div>
        <!-- Add Task Export Buttons End -->
        <!-- Timeline View Start -->
        @php
            $allNotesTimeline = collect();

            $cNotes = \App\Models\ClientNote::where('client_id', $client->id)->get();
            foreach ($cNotes as $cn) {
                $allNotesTimeline->push([
                    'id' => $cn->id,
                    'title' => $cn->title,
                    'details' => $cn->details,
                    'type' => 'Client Note',
                    'badge_color' => 'badge-primary',
                    'created_by' => $client->clientDetails?->addedBy?->name ?: 'Admin',
                    'created_at' => $cn->created_at,
                ]);
            }

            $deals = \App\Models\Deal::where('client_id', $client->id)->pluck('id');
            $dNotes = \App\Models\DealNote::whereIn('deal_id', $deals)->get();
            foreach ($dNotes as $dn) {
                $allNotesTimeline->push([
                    'id' => $dn->id,
                    'title' => $dn->title ?: 'Deal Discussion Note',
                    'details' => $dn->note,
                    'type' => 'Deal Note',
                    'badge_color' => 'badge-info',
                    'created_by' => 'Lead Agent',
                    'created_at' => $dn->created_at,
                ]);
            }

            $leadIds = \App\Models\Lead::where('client_id', $client->id)->orWhere('id', $client->clientDetails?->lead_id)->pluck('id');
            $lNotes = \App\Models\LeadNote::whereIn('lead_id', $leadIds)->get();
            foreach ($lNotes as $ln) {
                $allNotesTimeline->push([
                    'id' => $ln->id,
                    'title' => $ln->title ?: 'Lead Qualification Note',
                    'details' => $ln->details,
                    'type' => 'Lead Note',
                    'badge_color' => 'badge-warning text-dark',
                    'created_by' => 'Sales Rep',
                    'created_at' => $ln->created_at,
                ]);
            }

            $allNotesTimeline = $allNotesTimeline->sortByDesc('created_at');
        @endphp

        <div class="card border-0 b-shadow-4 rounded-lg bg-white mb-4 mt-3">
            <div class="card-header bg-white border-bottom-grey py-3 px-4 d-flex justify-content-between align-items-center">
                <h4 class="f-15 font-weight-bold text-darkest-grey mb-0">
                    <i class="fa fa-stream text-primary mr-2"></i>Notes Timeline History
                </h4>
                <span class="badge badge-light border px-3 py-1 font-weight-bold f-12 text-darkest-grey">
                    {{ $allNotesTimeline->count() }} Total Notes
                </span>
            </div>
            <div class="card-body p-4">
                <div class="timeline">
                    @forelse($allNotesTimeline as $noteItem)
                        <div class="timeline-item mb-3 pb-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <div>
                                    <span class="badge {{ $noteItem['badge_color'] }} px-2 py-1 font-weight-bold f-11 rounded-pill mr-2">
                                        {{ $noteItem['type'] }}
                                    </span>
                                    <h5 class="f-14 font-weight-bold text-darkest-grey d-inline mb-0">{{ $noteItem['title'] }}</h5>
                                </div>
                                <span class="f-11 text-dark-grey">
                                    <i class="fa fa-clock mr-1"></i>{{ $noteItem['created_at'] ? $noteItem['created_at']->format('d M Y, h:i A') : 'N/A' }}
                                </span>
                            </div>
                            @if($noteItem['details'])
                                <div class="f-12 text-dark-grey bg-light rounded p-2 mt-2 border">
                                    {!! nl2br(e($noteItem['details'])) !!}
                                </div>
                            @endif
                            <div class="f-11 text-muted mt-1">
                                Created by: <span class="font-weight-bold text-darkest-grey">{{ $noteItem['created_by'] }}</span>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-dark-grey py-3 mb-0">No timeline notes available for this client.</p>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Task Box Start -->
        <div class="d-flex flex-column w-tables rounded mt-3 bg-white">

            {!! $dataTable->table(['class' => 'table table-hover border-0 w-100']) !!}

        </div>
        <!-- Task Box End -->
    </div>
</div>

@include('sections.datatable_js')

<script>
    $('#client-notes-table').on('preXhr.dt', function(e, settings, data) {
        var clientID = "{{ $client->id }}";
        data['clientID'] = clientID;
    });
    const showTable = () => {
        window.LaravelDataTables["client-notes-table"].draw(true);
    }

    $('#quick-action-type').change(function() {
        const actionValue = $(this).val();
        if (actionValue != '') {
            $('#quick-action-apply').removeAttr('disabled');

            if (actionValue == 'change-status') {
                $('.quick-action-field').addClass('d-none');
                $('#change-status-action').removeClass('d-none');
            } else {
                $('.quick-action-field').addClass('d-none');
            }
        } else {
            $('#quick-action-apply').attr('disabled', true);
            $('.quick-action-field').addClass('d-none');
        }
    });

    $('#quick-action-apply').click(function() {
        const actionValue = $('#quick-action-type').val();
        if (actionValue == 'delete') {
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
                    applyQuickAction();
                }
            });

        } else {
            applyQuickAction();
        }
    });

    $('body').on('click', '.delete-table-row', function() {
        var id = $(this).data('user-id');
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
                var url = "{{ route('client-notes.destroy', ':id') }}";
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
                            showTable();
                        }
                    }
                });
            }
        });
    });

    const applyQuickAction = () => {
        var rowdIds = $("#client-notes-table input:checkbox:checked").map(function() {
            return $(this).val();
        }).get();

        var url = "{{ route('client-notes.apply_quick_action') }}?row_ids=" + rowdIds;

        $.easyAjax({
            url: url,
            container: '#quick-action-form',
            type: "POST",
            disableButton: true,
            buttonSelector: "#quick-action-apply",
            data: $('#quick-action-form').serialize(),
            success: function(response) {
                if (response.status == 'success') {
                    showTable();
                    resetActionButtons();
                    deSelectAll();
                }
            }
        })
    };

    $('body').on('click', '.ask-for-password', function() {
        let clientNoteId = $(this).data('client-note-id');

        var url = "{{ route('client_notes.ask_for_password', ':id') }}";
        url = url.replace(':id', clientNoteId);

        $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
        $.ajaxModal(MODAL_LG, url);

    });

    // show note detail in right modal
    var getNoteDetail = function(id) {
        openTaskDetail();

        var url = "{{ route('client-notes.show_verified', ':id') }}";
        url = url.replace(':id', id);
        var token = "{{ csrf_token() }}";

        $.easyAjax({
            url: url,
            blockUI: true,
            type: "POST",
            container: RIGHT_MODAL,
            historyPush: true,
            data: {
                '_token': token
            },
            success: function(response) {
                if (response.status == "success") {
                    $(RIGHT_MODAL_CONTENT).html(response.html);
                    $(RIGHT_MODAL_TITLE).html(response.title);
                }
            },
            error: function(request, status, error) {
                if (request.status == 403) {
                    $(RIGHT_MODAL_CONTENT).html(
                        '<div class="align-content-between d-flex justify-content-center mt-105 f-21">403 | Permission Denied</div>'
                    );
                } else if (request.status == 404) {
                    $(RIGHT_MODAL_CONTENT).html(
                        '<div class="align-content-between d-flex justify-content-center mt-105 f-21">404 | Not Found</div>'
                    );
                } else if (request.status == 500) {
                    $(RIGHT_MODAL_CONTENT).html(
                        '<div class="align-content-between d-flex justify-content-center mt-105 f-21">500 | Something Went Wrong</div>'
                    );
                }
            }
        });
    };

</script>
