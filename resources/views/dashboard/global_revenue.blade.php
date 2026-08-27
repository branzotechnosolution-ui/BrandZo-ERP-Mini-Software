@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Global Enterprise Revenue Command Center</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Global Enterprise ARR</h6>
                <h3 class="font-weight-bold text-primary mb-0">.0 Million</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">AI Commerce Volume</h6>
                <h3 class="font-weight-bold text-success mb-0">.45M / mo</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Partner Commissions</h6>
                <h3 class="font-weight-bold text-dark mb-0">.24M / mo</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Automated Renewal Rate</h6>
                <h3 class="font-weight-bold text-info mb-0">99.2%</h3>
            </div>
        </div>
    </div>
</div>
@endsection
