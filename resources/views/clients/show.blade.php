@extends('layouts.app')

@push('styles')
<style>
    /* Hide scrollbars cleanly */
    .project-header, .tabs, nav.tabs, .client-detail-wrapper {
        scrollbar-width: none !important;
        -ms-overflow-style: none !important;
    }
    .project-header::-webkit-scrollbar, .tabs::-webkit-scrollbar, nav.tabs::-webkit-scrollbar, .client-detail-wrapper::-webkit-scrollbar {
        display: none !important;
        height: 0px !important;
        width: 0px !important;
    }

    /* Modern SaaS CRM Profile Card Styling */
    .card {
        border-radius: 12px !important;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03) !important;
        border: 1px solid #F1F5F9 !important;
        margin-bottom: 20px !important;
        background-color: #FFFFFF !important;
    }
    .card-header {
        background-color: #FFFFFF !important;
        border-radius: 12px 12px 0 0 !important;
        border-bottom: 1px solid #F1F5F9 !important;
        padding: 14px 20px !important;
    }
    .card-body {
        padding: 20px !important;
    }
    /* Master SaaS CRM Client Navigation Tabs System */
    .project-header.filter-box,
    .project-header {
        display: block !important;
        width: 100% !important;
        background-color: #FFFFFF !important;
        border-radius: 12px !important;
        border: 1px solid #E2E8F0 !important;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04) !important;
        margin-bottom: 20px !important;
        padding: 0 !important;
        overflow: hidden !important;
    }

    .project-menu,
    #mob-client-detail {
        display: block !important;
        width: 100% !important;
        background-color: #FFFFFF !important;
        padding: 0 !important;
        margin: 0 !important;
        overflow: hidden !important;
    }

    nav.tabs {
        display: block !important;
        width: 100% !important;
        background-color: #FFFFFF !important;
        border-bottom: 1px solid #E2E8F0 !important;
        padding: 0 8px !important;
        margin: 0 !important;
        overflow-x: auto !important;
        overflow-y: hidden !important;
        white-space: nowrap !important;
        -webkit-overflow-scrolling: touch !important;
        scrollbar-width: none !important;
        -ms-overflow-style: none !important;
    }

    nav.tabs::-webkit-scrollbar {
        display: none !important;
        height: 0 !important;
        width: 0 !important;
    }

    .project-menu .tabs ul.-primary,
    nav.tabs ul.-primary {
        display: flex !important;
        flex-direction: row !important;
        flex-wrap: nowrap !important;
        align-items: center !important;
        justify-content: flex-start !important;
        margin: 0 !important;
        padding: 0 !important;
        list-style: none !important;
        border: none !important;
        background: transparent !important;
        width: max-content !important;
        min-width: 100% !important;
    }

    .project-menu .tabs ul.-primary::after,
    .project-menu .tabs ul.-primary::before,
    nav.tabs::after,
    nav.tabs::before,
    .-more,
    .-secondary {
        display: none !important;
        content: none !important;
    }

    .project-menu .tabs ul.-primary > li,
    nav.tabs ul.-primary > li {
        display: inline-flex !important;
        flex-shrink: 0 !important;
        margin: 0 2px !important;
        padding: 0 !important;
        list-style: none !important;
        height: 46px !important;
    }

    .project-menu .tabs ul.-primary > li > a,
    .project-menu .tabs ul.-primary > li > a.p-sub-menu,
    .project-menu .tabs ul.-primary > li > a.ajax-tab {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        height: 44px !important;
        padding: 0 16px !important;
        font-size: 13px !important;
        font-weight: 600 !important;
        color: #475569 !important;
        text-decoration: none !important;
        border: none !important;
        border-bottom: 3px solid transparent !important;
        background-color: transparent !important;
        border-radius: 6px 6px 0 0 !important;
        transition: all 0.15s ease-in-out !important;
        white-space: nowrap !important;
        cursor: pointer !important;
        position: relative !important;
        box-sizing: border-box !important;
    }

    .project-menu .tabs ul.-primary > li > a:hover,
    .project-menu .tabs ul.-primary > li > a.p-sub-menu:hover,
    .project-menu .tabs ul.-primary > li > a.ajax-tab:hover {
        color: #2563EB !important;
        background-color: #F8FAFC !important;
    }

    .project-menu .tabs ul.-primary > li > a.active,
    .project-menu .tabs ul.-primary > li > a.p-sub-menu.active,
    .project-menu .tabs ul.-primary > li > a.ajax-tab.active {
        color: #2563EB !important;
        border-bottom: 3px solid #2563EB !important;
        background-color: #EFF6FF !important;
        font-weight: 700 !important;
    }

    /* Container Full Width Rule System */
    #tab-container,
    .client-detail-wrapper #tab-container {
        width: 100% !important;
        min-width: 100% !important;
        max-width: 100% !important;
    }
    #tab-container > div,
    #tab-container > .row,
    #tab-container > .tab-pane,
    #tab-container > .card,
    #tab-container > .table-responsive {
        width: 100% !important;
        min-width: 100% !important;
    }

    .client-badge-row {
        gap: 8px !important;
    }
    .client-action-btn-row {
        gap: 8px !important;
    }
    
    /* Master SaaS CRM Fixed Table Layout System */
    .client-module-table,
    table.client-module-table,
    .w-tables table.dataTable,
    .table-responsive table.dataTable {
        width: 100% !important;
        min-width: 100% !important;
        max-width: 100% !important;
        table-layout: fixed !important;
        border-collapse: separate !important;
        border-spacing: 0 !important;
        margin: 0 !important;
    }

    .w-tables,
    .table-responsive {
        width: 100% !important;
        max-width: 100% !important;
        border-radius: 12px !important;
        border: 1px solid #E2E8F0 !important;
        background-color: #FFFFFF !important;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.04) !important;
        margin-top: 15px !important;
        padding: 0 !important;
        overflow-x: auto !important;
        scrollbar-width: none !important;
        -ms-overflow-style: none !important;
    }
    .w-tables::-webkit-scrollbar,
    .table-responsive::-webkit-scrollbar {
        display: none !important;
        height: 0px !important;
        width: 0px !important;
    }

    /* 3. Header Row Styling */
    .client-module-table thead tr,
    table.dataTable thead tr {
        background-color: #F8FAFC !important;
    }
    .client-module-table thead th,
    table.dataTable thead th {
        background-color: #F8FAFC !important;
        color: #475569 !important;
        font-weight: 600 !important;
        font-size: 12px !important;
        text-transform: uppercase !important;
        letter-spacing: 0.5px !important;
        padding: 14px 16px !important;
        border-top: none !important;
        border-bottom: 1px solid #E2E8F0 !important;
        border-left: none !important;
        border-right: none !important;
        vertical-align: middle !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        white-space: nowrap !important;
    }

    /* 4. Table Row & Cell Styling */
    .client-module-table tbody tr,
    table.dataTable tbody tr {
        background-color: #FFFFFF !important;
        transition: background-color 0.15s ease-in-out !important;
    }
    .client-module-table tbody tr:hover,
    table.dataTable tbody tr:hover {
        background-color: #F8FAFC !important;
    }
    .client-module-table tbody td,
    table.dataTable tbody td {
        padding: 14px 16px !important;
        vertical-align: middle !important;
        font-size: 13px !important;
        color: #1E293B !important;
        border-bottom: 1px solid #F1F5F9 !important;
        border-top: none !important;
        border-left: none !important;
        border-right: none !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        white-space: nowrap !important;
    }

    /* Fixed Column Width Distribution System */

    /* 1. Checkbox Column (First Child) -> 45px fixed */
    .client-module-table thead th:first-child,
    .client-module-table tbody td:first-child,
    table.dataTable thead th:first-child,
    table.dataTable tbody td:first-child {
        width: 45px !important;
        max-width: 45px !important;
        min-width: 45px !important;
        text-align: center !important;
        padding-left: 14px !important;
        padding-right: 10px !important;
    }

    /* 2. Text Columns -> Left Aligned & Percentage Width Distribution */
    .client-module-table thead th:nth-child(2),
    .client-module-table tbody td:nth-child(2),
    table.dataTable thead th:nth-child(2),
    table.dataTable tbody td:nth-child(2) {
        width: 18% !important;
        text-align: left !important;
    }

    .client-module-table thead th:nth-child(3),
    .client-module-table tbody td:nth-child(3),
    table.dataTable thead th:nth-child(3),
    table.dataTable tbody td:nth-child(3) {
        width: 18% !important;
        text-align: left !important;
    }

    .client-module-table thead th:nth-child(4),
    .client-module-table tbody td:nth-child(4),
    table.dataTable thead th:nth-child(4),
    table.dataTable tbody td:nth-child(4) {
        width: 22% !important;
        text-align: left !important;
    }

    .client-module-table thead th:nth-child(5),
    .client-module-table tbody td:nth-child(5),
    table.dataTable thead th:nth-child(5),
    table.dataTable tbody td:nth-child(5) {
        width: 12% !important;
        text-align: center !important;
    }

    .client-module-table thead th:nth-child(6),
    .client-module-table tbody td:nth-child(6),
    table.dataTable thead th:nth-child(6),
    table.dataTable tbody td:nth-child(6) {
        width: 12% !important;
        text-align: center !important;
    }

    .client-module-table thead th:nth-child(7),
    .client-module-table tbody td:nth-child(7),
    table.dataTable thead th:nth-child(7),
    table.dataTable tbody td:nth-child(7) {
        width: 10% !important;
        text-align: center !important;
    }

    /* 3. Action Menu Column (Last Child) -> Always Sticky Right Edge (70px fixed) */
    .client-module-table thead th:last-child,
    .client-module-table tbody td:last-child,
    table.dataTable thead th:last-child,
    table.dataTable tbody td:last-child {
        width: 70px !important;
        max-width: 70px !important;
        min-width: 70px !important;
        text-align: right !important;
        padding-right: 20px !important;
    }

    .client-module-table tbody td:last-child .task_view,
    .client-module-table tbody td:last-child .dropdown,
    table.dataTable tbody td:last-child .task_view,
    table.dataTable tbody td:last-child .dropdown {
        display: inline-flex !important;
        justify-content: flex-end !important;
        float: right !important;
    }

    /* 5. Three-dot Action Menu button */
    .task_view .task_view_more,
    .dropdown-toggle.task_view_more {
        width: 30px !important;
        height: 30px !important;
        border-radius: 6px !important;
        background-color: transparent !important;
        color: #64748B !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        transition: all 0.15s ease-in-out !important;
    }
    .task_view .task_view_more:hover,
    .dropdown-toggle.task_view_more:hover {
        background-color: #F1F5F9 !important;
        color: #0F172A !important;
    }

    /* File Cards & Spacing */
    .card-file, .file-card {
        border-radius: 10px !important;
        border: 1px solid #E2E8F0 !important;
        box-shadow: 0 2px 4px rgba(0,0,0,0.02) !important;
    }
</style>
@endpush

@push('datatable-styles')
    @include('sections.datatable_css')
@endpush

@php
$viewClientDoc = user()->permission('view_client_document');
$viewTicket = user()->permission('view_tickets');
$viewClientNote = user()->permission('view_client_note');
$viewClientContact = user()->permission('view_client_contacts');
$viewClientOrder = user()->permission('view_order');
@endphp

@section('filter-section')
    <!-- FILTER START -->
    <!-- PROJECT HEADER START -->

    <!-- SINGLE CLIENT HEADER CARD WITH QUICK ACTIONS -->
    <div class="card border-0 b-shadow-4 rounded-lg bg-white mb-3 client-header-card">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <!-- Avatar & Client Details -->
                <div class="col-lg-7 col-md-12 mb-3 mb-lg-0 d-flex align-items-center">
                    <div class="position-relative mr-3 flex-shrink-0">
                        <img src="{{ $client->image_url }}" class="rounded-circle border shadow-xs" width="64" height="64" alt="{{ $client->name }}">
                        <span class="position-absolute bottom-0 right-0 p-1 bg-success border border-white rounded-circle" title="Active"></span>
                    </div>
                    <div>
                        <!-- EXACT BADGE ORDER: 1. BZCL024 badge -> 2. Active badge -> 3. VIP badge -->
                        <div class="d-flex align-items-center mb-1 flex-wrap client-badge-row">
                            <span class="badge badge-primary px-3 py-1 font-weight-bold f-12 rounded-pill shadow-xs" style="background-color: #2563EB;">
                                {{ $client->clientDetails?->client_code ?: ('BZCL' . str_pad($client->id, 3, '0', STR_PAD_LEFT)) }}
                            </span>
                            <span class="badge badge-success px-3 py-1 font-weight-bold f-12 rounded-pill shadow-xs" style="background-color: #10B981;">
                                <i class="fa fa-check-circle mr-1"></i>{{ ucfirst($client->status ?: 'Active') }}
                            </span>
                            <span class="badge badge-warning px-3 py-1 font-weight-bold f-12 rounded-pill text-dark shadow-xs" style="background-color: #F59E0B; color: #FFF !important;">
                                <i class="fa fa-star mr-1"></i>VIP Client
                            </span>
                        </div>
                        <h2 class="f-20 font-weight-bold text-darkest-grey mb-1">{{ $client->name }}</h2>
                        <p class="f-13 text-dark-grey mb-0">
                            <i class="fa fa-building text-primary mr-1"></i>{{ $client->clientDetails?->company_name ?: 'Company N/A' }}
                            <span class="mx-2">|</span>
                            <i class="fa fa-user-tag text-info mr-1"></i>{{ $client->clientDetails?->industry ?: 'Corporate' }}
                        </p>
                    </div>
                </div>

                <!-- Quick Action Buttons -->
                <div class="col-lg-5 col-md-12 d-flex flex-wrap align-items-center justify-content-lg-end client-action-btn-row">
                    @if($client->mobile)
                        <a href="tel:{{ $client->mobile }}" class="btn btn-sm btn-outline-primary rounded-pill font-weight-bold px-3">
                            <i class="fa fa-phone mr-1"></i>Call
                        </a>
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $client->mobile) }}" target="_blank" class="btn btn-sm btn-success text-white rounded-pill font-weight-bold px-3" style="background-color: #25D366; border: none;">
                            <i class="fab fa-whatsapp mr-1"></i>WhatsApp
                        </a>
                    @endif

                    @if($client->email)
                        <a href="mailto:{{ $client->email }}" class="btn btn-sm btn-outline-dark rounded-pill font-weight-bold px-3">
                            <i class="fa fa-envelope mr-1"></i>Email
                        </a>
                    @endif

                    <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-sm btn-primary text-white rounded-pill font-weight-bold px-3 openRightModal" style="background-color: #2563EB;">
                        <i class="fa fa-edit mr-1"></i>Edit
                    </a>

                    <a href="{{ route('clients.show', $client->id) }}?tab=notes" class="btn btn-sm btn-light border rounded-pill font-weight-bold px-3">
                        <i class="fa fa-sticky-note text-warning mr-1"></i>Add Note
                    </a>

                    <a href="{{ route('clients.show', $client->id) }}?tab=documents" class="btn btn-sm btn-light border rounded-pill font-weight-bold px-3">
                        <i class="fa fa-paperclip text-info mr-1"></i>Upload Document
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex d-lg-block filter-box project-header bg-white">
        <div class="mobile-close-overlay w-100 h-100" id="close-client-overlay"></div>

        <div class="project-menu" id="mob-client-detail">
            <a class="d-none close-it" href="javascript:;" id="close-client-detail">
                <i class="fa fa-times"></i>
            </a>

            <nav class="tabs">
                <ul class="-primary">
                    <li>
                        <x-tab :href="route('clients.show', $client->id)" :text="__('modules.employees.profile')" class="profile" />
                    </li>

                    @if (in_array('projects', user_modules()))
                    <li>
                        <x-tab :href="route('clients.show', $client->id).'?tab=projects'" :text="__('app.menu.projects')"
                            class="projects" />
                    </li>
                    @endif

                    @if (in_array('invoices', user_modules()))
                    <li>
                        <x-tab :href="route('clients.show', $client->id).'?tab=invoices'" :text="__('app.menu.invoices')"
                            class="invoices" />
                    </li>
                    @endif

                    @if (in_array('estimates', user_modules()))
                    <li>
                        <x-tab :href="route('clients.show', $client->id).'?tab=estimates'" :text="__('app.menu.estimates')"
                            class="estimates" />
                    </li>
                    @endif

                    <li>
                        <x-tab :href="route('clients.show', $client->id).'?tab=creditnotes'" :text="__('app.menu.credit-note')"
                            class="creditnotes" />
                    </li>

                    @if (in_array('payments', user_modules()))
                    <li>
                        <x-tab :href="route('clients.show', $client->id).'?tab=payments'" :text="__('app.menu.payments')"
                            class="payments" />
                    </li>
                    @endif

                    @if ($viewClientContact == 'all' || $viewClientContact == 'added')
                    <li>
                        <x-tab :href="route('clients.show', $client->id).'?tab=contacts'" :text="__('app.menu.contacts')"
                            class="contacts" />
                    </li>
                    @endif

                    @if ($viewClientDoc == 'all' || ($viewClientDoc == 'added' && $client->clientDetails->added_by == user()->id) || ($viewClientDoc == 'owned' && $client->clientDetails->user_id == user()->id) || ($viewClientDoc == 'both' && ($client->clientDetails->added_by == user()->id || $client->clientDetails->user_id == user()->id)))
                    <li>
                        <x-tab :href="route('clients.show', $client->id).'?tab=documents'" :text="__('app.menu.documents')"
                            class="documents" />
                    </li>
                    @endif

                    @if ($viewClientNote != 'none')
                    <li>
                        <x-tab :href="route('clients.show', $client->id).'?tab=notes'" :text="__('app.menu.notes')"
                            class="notes" />
                    </li>
                    @endif

                    @if ($viewTicket == 'all' || $viewTicket == 'added')
                    <li>
                        <x-tab :href="route('clients.show', $client->id).'?tab=tickets'" :text="__('app.menu.tickets')"
                            class="tickets" />
                    </li>
                    @endif

                    @if (in_array('orders', user_modules()) && $viewClientOrder == 'all' || ($viewClientOrder == 'added' && $client->clientDetails->added_by == user()->id) || ($viewClientOrder == 'owned' && $client->clientDetails->user_id == user()->id) || ($viewClientOrder == 'both' && ($client->clientDetails->added_by == user()->id || $client->clientDetails->user_id == user()->id)))

                    <li>
                        <x-tab :href="route('clients.show', $client->id).'?tab=orders'" :text="__('app.menu.orders')"
                            class="orders" />
                    </li>
                    @endif

                    <li>
                        <x-tab :href="route('clients.show', $client->id).'?tab=activity'" text="Activity Timeline"
                            class="activity" />
                    </li>
                    <li>
                        <x-tab :href="route('clients.show', $client->id).'?tab=communication'" text="Communication"
                            class="communication" />
                    </li>
                    <li>
                        <x-tab :href="route('clients.show', $client->id).'?tab=contracts'" text="Contracts"
                            class="contracts" />
                    </li>
                    <li>
                        <x-tab :href="route('clients.show', $client->id).'?tab=tasks'" text="Tasks"
                            class="tasks" />
                    </li>
                    <li>
                        <x-tab :href="route('clients.show', $client->id).'?tab=files'" text="Files Vault"
                            class="files" />
                    </li>

                    @if ($gdpr->enable_gdpr)
                    <li>
                        <x-tab :href="route('clients.show', $client->id).'?tab=gdpr'" :text="__('app.menu.gdpr')"
                            class="gdpr" />
                    </li>
                    @endif
                </ul>
            </nav>
        </div>

        <a class="mb-0 d-block d-lg-none text-dark-grey ml-auto mr-2 border-left-grey" onclick="openClientDetailSidebar()"><i class="fa fa-ellipsis-v "></i></a>

    </div>
    <!-- FILTER END -->
    <!-- PROJECT HEADER END -->

@endsection

@push('styles')
<script src="{{ asset('vendor/jquery/Chart.min.js') }}"></script>
@endpush

@section('content')

    <div class="content-wrapper border-top-0 client-detail-wrapper pt-0">
        <!-- TAB CONTENT CONTAINER -->
        <div class="d-flex flex-grow-1 w-100" id="tab-container">
            @include($view)
        </div>
    </div>

@endsection

@push('scripts')
<script>
    $("body").on("click", ".project-menu .ajax-tab", function(event) {
        var url = $(this).attr("href");
        if (url && url !== 'javascript:;') {
            event.preventDefault();
            $(".project-menu .ajax-tab").removeClass("active");
            $(this).addClass("active");

            $("#tab-container").html('<div class="d-flex justify-content-center align-items-center w-100 py-5 my-5"><div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div></div>');

            $.easyAjax({
                url: url,
                blockUI: false,
                container: "#tab-container",
                historyPush: true,
                success: function(response) {
                    if (response.status == 'success' || response.html) {
                        $("#tab-container").html(response.html);
                        init("#tab-container");
                    }
                }
            });
        }
    });

    const activeTab = "{{ $activeTab }}";
    $('.project-menu .' + activeTab).addClass('active');
</script>
@endpush
