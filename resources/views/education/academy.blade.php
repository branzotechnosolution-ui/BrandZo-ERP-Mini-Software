@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">BrandZo Customer Education Academy</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">HRMS & Attendance Masterclass</h5>
                <p class="text-muted f-14 mb-3">Learn employee onboarding, shift management, and biometric clock-in.</p>
                <button class="btn btn-sm btn-outline-primary">Start Course</button>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">CRM Pipeline & Deal Closing</h5>
                <p class="text-muted f-14 mb-3">Master 9-stage Kanban pipeline, AI lead scoring, and automated follow-ups.</p>
                <button class="btn btn-sm btn-outline-primary">Start Course</button>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">Invoicing & Finance Automation</h5>
                <p class="text-muted f-14 mb-3">Automate recurring invoices, tax/GST reports, and payment reminders.</p>
                <button class="btn btn-sm btn-outline-primary">Start Course</button>
            </div>
        </div>
    </div>
</div>
@endsection
