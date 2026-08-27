@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">AI Autonomous Enterprise Dashboard</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">AI Employees Active</h6>
                <h3 class="font-weight-bold text-primary mb-0">14 AI Employees</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Automated Tasks Today</h6>
                <h3 class="font-weight-bold text-dark mb-0">1,420 Tasks</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Business Health Score</h6>
                <h3 class="font-weight-bold text-success mb-0">99.4%</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Workflow Automation %</h6>
                <h3 class="font-weight-bold text-info mb-0">94.2%</h3>
            </div>
        </div>
    </div>
</div>
@endsection
