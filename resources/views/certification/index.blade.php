@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Partner Certification Program</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">BrandZo Certified Solution Consultant</h5>
                <p class="text-muted f-14 mb-3">Validate implementation skills across HRMS, CRM, and SaaS billing.</p>
                <button class="btn btn-sm btn-primary">Start Certification Exam</button>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">BrandZo Certified Developer</h5>
                <p class="text-muted f-14 mb-3">Build custom plugins, REST API integrations, and AI workflow bots.</p>
                <button class="btn btn-sm btn-primary">Start Certification Exam</button>
            </div>
        </div>
    </div>
</div>
@endsection
