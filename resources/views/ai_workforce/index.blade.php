@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">AI Digital Employee Roster</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-6 mb-4">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h5 class="font-weight-bold text-primary mb-0">AI Sales Executive #101</h5>
                    <span class="badge badge-success">Active</span>
                </div>
                <p class="text-muted f-14 mb-2">Department: Sales | Performance: 98.5%</p>
                <p class="f-14 text-dark mb-0">Current Task: Qualifying 14 inbound enterprise leads</p>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h5 class="font-weight-bold text-primary mb-0">AI Support Specialist #102</h5>
                    <span class="badge badge-success">Active</span>
                </div>
                <p class="text-muted f-14 mb-2">Department: Customer Success | Performance: 99.1%</p>
                <p class="f-14 text-dark mb-0">Current Task: Resolving SLA Level-1 support tickets</p>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h5 class="font-weight-bold text-primary mb-0">AI Finance Analyst #103</h5>
                    <span class="badge badge-success">Active</span>
                </div>
                <p class="text-muted f-14 mb-2">Department: Finance | Performance: 97.8%</p>
                <p class="f-14 text-dark mb-0">Current Task: Auditing monthly cash flow & overdue invoices</p>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h5 class="font-weight-bold text-primary mb-0">AI HR Coordinator #104</h5>
                    <span class="badge badge-success">Active</span>
                </div>
                <p class="text-muted f-14 mb-2">Department: HR & Operations | Performance: 96.9%</p>
                <p class="f-14 text-dark mb-0">Current Task: Screening engineering resumes & tracking deadlines</p>
            </div>
        </div>
    </div>
</div>
@endsection
