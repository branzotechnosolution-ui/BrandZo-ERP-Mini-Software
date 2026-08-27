@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Enterprise API Gateway & Platform Analytics</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Daily API Volume</h6>
                <h3 class="font-weight-bold text-primary mb-0">18.4M Req</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Gateway Latency</h6>
                <h3 class="font-weight-bold text-success mb-0">1.42 ms</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Active API Keys</h6>
                <h3 class="font-weight-bold text-dark mb-0">38,400 Keys</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">SLA Reliability</h6>
                <h3 class="font-weight-bold text-info mb-0">99.999% SLA</h3>
            </div>
        </div>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">API Gateway, OAuth2 Authentication & Webhook Operations</h4>
        <p class="text-muted mb-4">Managing rate limiting (10,000 req/min), OAuth2 bearer authentication, 384,000 daily webhook events, mTLS security, and zero-downtime versioning across all BrandZo microservices.</p>
        <button class="btn btn-primary btn-sm">Manage API Keys & Security Policies</button>
    </div>
</div>
@endsection
