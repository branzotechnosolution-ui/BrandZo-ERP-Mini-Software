@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Advanced Sales CRM Dashboard</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Total Leads in Pipeline</h6>
                <h3 class="font-weight-bold text-primary mb-0">{{ $totalLeads }}</h3>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Total Pipeline Value</h6>
                <h3 class="font-weight-bold text-success mb-0">${{ number_format($pipelineValue, 2) }}</h3>
            </div>
        </div>
    </div>
</div>
@endsection
