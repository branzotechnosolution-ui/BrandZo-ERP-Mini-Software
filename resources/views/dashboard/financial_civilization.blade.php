@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Global Financial Civilization Dashboard</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Global Assets Managed</h6>
                <h3 class="font-weight-bold text-primary mb-0">.42 Billion</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Daily Transaction Volume</h6>
                <h3 class="font-weight-bold text-success mb-0">.5M / day</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Cash Flow Accuracy</h6>
                <h3 class="font-weight-bold text-dark mb-0">99.6%</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Connected Global Banks</h6>
                <h3 class="font-weight-bold text-info mb-0">480 Banks</h3>
            </div>
        </div>
    </div>
</div>
@endsection
