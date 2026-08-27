@extends('layouts.app')

@push('datatable-styles')
    @include('sections.datatable_css')
@endpush

@php
$viewClientNote = user()->permission('view_lead_note');
$viewDeals = user()->permission('view_deals');
$editLeadPermission = user()->permission('edit_lead');
$deleteLeadPermission = user()->permission('delete_lead');
$leadContactId = isset($leadContact->id) ? $leadContact->id : 44;
$leadCode = 'BZ' . str_pad($leadContactId, 3, '0', STR_PAD_LEFT);
$latestDeal = \App\Models\Deal::where('lead_contact_id', $leadContactId)->latest()->first();
$statusText = $latestDeal ? ($latestDeal->leadStage?->name ?: 'Follow Up 3') : 'New Lead';
@endphp

@section('filter-section')
    <!-- CRM Profile Header Card -->
    <div class="card border-0 b-shadow-4 mb-3 rounded bg-white">
        <div class="card-body p-3 p-md-4">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                
                <!-- Left Side: Profile Avatar, Name, BZ ID, Lead Type -->
                <div class="d-flex align-items-center mb-3 mb-md-0">
                    <div class="mr-3">
                        <div class="rounded-circle text-primary font-weight-bold d-flex align-items-center justify-content-center shadow-sm" style="width: 54px; height: 54px; font-size: 22px; background-color: #EFF6FF;">
                            <i class="fa fa-user text-primary"></i>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex align-items-center flex-wrap">
                            <h3 class="f-18 font-weight-bold text-darkest-grey mb-0 mr-2">{{ $leadContact->client_name_salutation }}</h3>
                            <span class="badge badge-primary px-2 py-1 font-weight-bold f-12 rounded-pill mr-2">[{{ $leadCode }}]</span>
                            <span class="badge badge-light border text-dark-grey f-11 px-2 py-1 font-weight-semibold">{{ $leadContact->project_type ?: ($leadContact->service_required ?: 'Website') }}</span>
                        </div>
                        <p class="f-12 text-dark-grey mb-0 mt-1">
                            <i class="fa fa-building text-lightest mr-1"></i>{{ $leadContact->company_name ?: 'Individual Client' }} &bull; 
                            <i class="fa fa-envelope text-lightest mr-1 ml-1"></i>{{ $leadContact->client_email ?: 'No email' }} &bull; 
                            <i class="fa fa-phone text-lightest mr-1 ml-1"></i>{{ $leadContact->mobile ?: '--' }}
                        </p>
                    </div>
                </div>

                <!-- Right Side: Status Badge, Lead Agent & Actions -->
                <div class="d-flex align-items-center">
                    <div class="mr-3 text-right">
                        <span class="badge badge-warning text-white px-3 py-1 font-weight-bold f-12 rounded-pill d-inline-block mb-1 shadow-sm" style="background-color: #F59E0B;">
                            Status: {{ $statusText }}
                        </span>
                        <div class="f-12 text-dark-grey">
                            <span class="text-lightest">Lead Agent:</span> 
                            <span class="font-weight-semibold text-darkest-grey">{{ $leadContact->leadOwner?->name ?: ($leadContact->addedBy?->name ?: 'Hostinger Admin') }}</span>
                        </div>
                    </div>

                    <!-- Actions Dropdown -->
                    <div class="dropdown">
                        <button class="btn f-14 p-2 text-dark-grey bg-light rounded-circle border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right border-grey rounded b-shadow-4 p-0">
                            @if ($editLeadPermission == 'all' || ($editLeadPermission == 'both' && (user()->id == $leadContact->added_by || user()->id == $leadContact->lead_owner)) || ($editLeadPermission == 'owned' && user()->id == $leadContact->lead_owner) || ($editLeadPermission == 'added' && user()->id == $leadContact->added_by))
                                <a class="dropdown-item openRightModal" href="{{ route('lead-contact.edit', $leadContact->id) }}"><i class="fa fa-edit mr-2 text-dark-grey"></i>@lang('app.edit')</a>
                            @endif

                            @if ($deleteLeadPermission == 'all' || ($deleteLeadPermission == 'added' && user()->id == $leadContact->added_by) || ($deleteLeadPermission == 'owned' && user()->id == $leadContact->lead_owner) || ($deleteLeadPermission == 'both' && (user()->id == $leadContact->added_by || user()->id == $leadContact->lead_owner)))
                                <a class="dropdown-item delete-table-row" href="javascript:;" data-id="{{ $leadContact->id }}"><i class="fa fa-trash mr-2 text-danger"></i>@lang('app.delete')</a>
                            @endif

                            @if ($leadContact->client_id == null || $leadContact->client_id == '')
                                <a class="dropdown-item" href="{{ route('clients.create') . '?lead=' . $leadContact->id }}"><i class="fa fa-user-plus mr-2 text-primary"></i>@lang('modules.lead.changeToClient')</a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- FILTER START / PROJECT HEADER START -->
    <div class="d-flex filter-box project-header bg-white rounded border-grey shadow-sm mb-3">
        <div class="mobile-close-overlay w-100 h-100" id="close-client-overlay"></div>
        <div class="project-menu d-lg-flex" id="mob-client-detail">
            <a class="d-none close-it" href="javascript:;" id="close-client-detail">
                <i class="fa fa-times"></i>
            </a>
            <x-tab :href="route('lead-contact.show', $leadContact->id)" text="Overview" class="profile" />

            @if ($viewDeals == 'all' || ($viewDeals == 'added' && $leadContact->added_by == user()->id) || ($viewDeals == 'owned' && $leadContact->lead_owner == user()->id) || ($viewDeals == 'both' && ($leadContact->added_by == user()->id || $leadContact->lead_owner == user()->id)))
                <x-tab :href="route('lead-contact.show', $leadContact->id).'?tab=deal'" text="Deals" class="deal" ajax="false"/>
            @endif

            @if ($viewClientNote == 'all' || $viewClientNote == 'both' || $viewClientNote == 'added' || $viewClientNote == 'owned')
                <x-tab :href="route('lead-contact.show', $leadContact->id).'?tab=notes'" ajax="false" text="Notes" class="notes" />
            @endif

            <x-tab :href="route('lead-contact.show', $leadContact->id).'?tab=profile'" text="Activities" class="activities" ajax="false" />
            <x-tab :href="route('lead-contact.show', $leadContact->id).'?tab=profile'" text="Documents" class="documents" ajax="false" />
        </div>
        <a class="mb-0 d-block d-lg-none text-dark-grey ml-auto mr-2 border-left-grey" onclick="openClientDetailSidebar()"><i class="fa fa-ellipsis-v "></i></a>
    </div>
    <!-- FILTER END / PROJECT HEADER END -->
@endsection

@section('content')

    <div class="content-wrapper border-top-0 client-detail-wrapper">
        @include($view)
    </div>

@endsection

@push('scripts')
    <script>
        .on("click", ".ajax-tab", function(event) {
            event.preventDefault();

            .removeClass('active');
            .addClass('active');

            const requestUrl = this.href;

            $.easyAjax({
                url: requestUrl,
                blockUI: true,
                container: ".content-wrapper",
                historyPush: true,
                success: function(response) {
                    if (response.status == "success") {
                        .html(response.html);
                        init('.content-wrapper');
                    }
                }
            });
        });

    </script>
    <script>
        const activeTab = "{{ $activeTab }}";
        .addClass('active');

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
                    var url = "{{ route('lead-contact.destroy', ':id') }}";
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
                                window.location.href = "{{ route('lead-contact.index')}}";
                            }
                        }
                    });
                }
            });
        });

    </script>
@endpush
