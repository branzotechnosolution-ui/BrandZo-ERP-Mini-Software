@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Global Cloud Civilization Dashboard</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Connected Cloud Regions</h6>
                <h3 class="font-weight-bold text-primary mb-0">84 Regions</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Daily AI Deployments</h6>
                <h3 class="font-weight-bold text-success mb-0">14,200 / day</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Cloud Cost Optimization</h6>
                <h3 class="font-weight-bold text-dark mb-0">-34.8% Spend</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">System Reliability SLA</h6>
                <h3 class="font-weight-bold text-info mb-0">99.999% SLA</h3>
            </div>
        </div>
    </div>
</div>
@endsection
