@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Industry-Specific Vertical ERP Packages</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-4 mb-4">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="font-weight-bold text-primary mb-2">Healthcare ERP</h4>
                <p class="text-muted f-14 mb-3">Patient records, doctor schedules, appointment booking, insurance claims.</p>
                <button class="btn btn-sm btn-outline-primary">Activate Healthcare Suite</button>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="font-weight-bold text-success mb-2">Manufacturing ERP</h4>
                <p class="text-muted f-14 mb-3">Bill of Materials (BOM), raw material inventory, production workflows, QA control.</p>
                <button class="btn btn-sm btn-outline-success">Activate Manufacturing Suite</button>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="font-weight-bold text-info mb-2">Education ERP</h4>
                <p class="text-muted f-14 mb-3">Student management, faculty logs, fee collection, certificate generation.</p>
                <button class="btn btn-sm btn-outline-info">Activate Education Suite</button>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="font-weight-bold text-warning mb-2">Real Estate ERP</h4>
                <p class="text-muted f-14 mb-3">Property listings, site visit scheduling, lead management, booking tracking.</p>
                <button class="btn btn-sm btn-outline-warning">Activate Real Estate Suite</button>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="font-weight-bold text-danger mb-2">Retail POS ERP</h4>
                <p class="text-muted f-14 mb-3">POS billing, barcode inventory, product management, customer loyalty rewards.</p>
                <button class="btn btn-sm btn-outline-danger">Activate Retail POS Suite</button>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="font-weight-bold text-dark mb-2">BPO & Call Center ERP</h4>
                <p class="text-muted f-14 mb-3">Agent performance, call logs, QA scorecards, real-time productivity reports.</p>
                <button class="btn btn-sm btn-outline-dark">Activate BPO Suite</button>
            </div>
        </div>
    </div>
</div>
@endsection
