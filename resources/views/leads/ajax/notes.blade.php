@php
    $addDealNotePermission = user()->permission('add_deal_note');
    $editLeadNotePermission = user()->permission('edit_deal_note');
    $viewLeadNotePermission = user()->permission('view_deal_note');
    $deleteLeadNotePermission = user()->permission('delete_deal_note');
@endphp

<div class="tab-pane fade show active p-3" role="tabpanel">
    @if ($addDealNotePermission == 'all' || $addDealNotePermission == 'added' || $addDealNotePermission == 'both')
        <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
            <h5 class="font-weight-bold text-dark mb-0"><i class="fa fa-sticky-note text-warning mr-2"></i>Notes Activity History</h5>
            <a class="btn btn-primary btn-sm font-weight-bold openRightModal px-3 height-35 f-13" href="{{ route('deal-notes.create').'?lead='.$deal->id }}" id="add-notes">
                <i class="fa fa-plus mr-1"></i> Add New Note
            </a>
        </div>
    @endif

    <div id="task-file-list">
        @if ($viewLeadNotePermission == 'all' || $viewLeadNotePermission == 'added' || $viewLeadNotePermission == 'both')
            <div class="timeline-notes-container">
                @forelse ($notes as $note)
                    @php
                        $creator = $note->addedBy ?: ($deal->leadAgent?->user ?: user());
                        $updater = $note->lastUpdatedBy;
                    @endphp
                    <div class="card border-0 shadow-sm rounded-lg mb-3 bg-white p-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{ $creator->image_url ?: asset('img/avatar.png') }}" class="rounded-circle mr-2 width-35 height-35" alt="avatar">
                                <div>
                                    <h6 class="font-weight-bold text-dark mb-0 f-14">{{ $note->title ?: 'Note Entry' }}</h6>
                                    <small class="text-muted f-12">
                                        Created By: <span class="font-weight-bold text-dark">{{ $creator->name }}</span> 
                                        • {{ $note->created_at ? $note->created_at->format('d-m-Y h:i A') : '--' }}
                                    </small>
                                </div>
                            </div>
                            <div class="dropdown ml-auto note-action">
                                <button class="btn btn-lg f-14 p-0 text-lightest rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right border-grey rounded b-shadow-4 p-0">
                                    @if ($viewLeadNotePermission == 'all' || ($viewLeadNotePermission == 'added' && user()->id == $note->added_by) || ($viewLeadNotePermission == 'both' && user()->id == $note->added_by))
                                        <a class="cursor-pointer d-block text-dark-grey f-13 py-1 px-3 view-note openRightModal" href="{{ route('deal-notes.show', $note->id) }}">@lang('app.view')</a>
                                    @endif
                                    @if ($editLeadNotePermission == 'all' || ($editLeadNotePermission == 'added' && $note->added_by == user()->id))
                                        <a class="cursor-pointer d-block text-dark-grey f-13 py-1 px-3 edit-note openRightModal" href="{{ route('deal-notes.edit', $note->id) }}" data-row-id="{{ $note->id }}">@lang('app.edit')</a>
                                    @endif
                                    @if ($deleteLeadNotePermission == 'all' || ($deleteLeadNotePermission == 'added' && $note->added_by == user()->id))
                                        <a class="cursor-pointer d-block text-dark-grey f-13 py-1 px-3 delete-note-lead" data-id="{{ $note->id }}" href="javascript:;">@lang('app.delete')</a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="bg-light p-3 rounded text-dark f-13 mt-1 mb-2">
                            {!! nl2br($note->details) !!}
                        </div>

                        @if($updater && $updater->id != $note->added_by)
                            <div class="border-top pt-2 mt-1 f-12 text-muted">
                                <i class="fa fa-edit text-info mr-1"></i> Updated By: <span class="font-weight-bold text-dark">{{ $updater->name }}</span> 
                                • {{ $note->updated_at ? $note->updated_at->format('d-m-Y h:i A') : '--' }}
                            </div>
                        @endif
                    </div>
                @empty
                    <div class="card border-0 shadow-sm p-4 text-center text-muted bg-white rounded-lg">
                        <i class="fa fa-clipboard f-24 mb-2 text-secondary"></i>
                        <p class="mb-0">No notes logged yet for this deal.</p>
                    </div>
                @endforelse
            </div>
        @endif
    </div>
</div>
