@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Enterprise Marketplace & Platform Ecosystem Command Center</h2>
        <span class="badge badge-success px-3 py-2 f-14">GLOBAL PLATFORM ECOSYSTEM ACTIVE</span>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Marketplace GMV</h6>
                <h3 class="font-weight-bold text-primary mb-0">.2 Million</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Published Enterprise Apps</h6>
                <h3 class="font-weight-bold text-success mb-0">520 Apps</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Certified Developers</h6>
                <h3 class="font-weight-bold text-dark mb-0">3,840 Devs</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Active Connectors</h6>
                <h3 class="font-weight-bold text-info mb-0">38,400 Connectors</h3>
            </div>
        </div>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">Public API Economy, Developer Cloud & Monetization Engine</h4>
        <p class="text-muted mb-4">Powering 18.4M daily API requests with sub-1.42ms gateway latency, 70/30 developer revenue split, 38,400 active enterprise connectors, and 520 published marketplace extensions.</p>
        <button class="btn btn-primary btn-sm">Publish New Enterprise App</button>
    </div>
</div>
@endsection
