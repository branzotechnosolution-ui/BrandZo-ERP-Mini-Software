@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Enterprise Digital Twin & Simulation Command Center</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Digital Twin Health Score</h6>
                <h3 class="font-weight-bold text-primary mb-0">99.4 / 100</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">5-Year Simulated ARR</h6>
                <h3 class="font-weight-bold text-success mb-0">.0 Million</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Financial Risk Score</h6>
                <h3 class="font-weight-bold text-dark mb-0">0.12 (Low Risk)</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Industry Templates</h6>
                <h3 class="font-weight-bold text-info mb-0">84 Scenarios</h3>
            </div>
        </div>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">Real-Time Predictive Decision Engine</h4>
        <p class="text-muted mb-4">Execute multi-horizon revenue simulations, test market crash worst-case scenarios, and automatically trigger predictive hiring and pricing optimizations.</p>
        <button class="btn btn-primary btn-sm">Run Real-Time Enterprise Simulation</button>
    </div>
</div>
@endsection
