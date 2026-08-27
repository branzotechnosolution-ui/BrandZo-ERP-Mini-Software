@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Developer Portal & Interactive API Console</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Registered Developers</h6>
                <h3 class="font-weight-bold text-primary mb-0">3,840 Developers</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Active Connected Apps</h6>
                <h3 class="font-weight-bold text-success mb-0">14,200 Apps</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Supported SDKs</h6>
                <h3 class="font-weight-bold text-dark mb-0">7 Languages</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Sandbox Environment</h6>
                <h3 class="font-weight-bold text-info mb-0">100% Active</h3>
            </div>
        </div>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">Developer Sandbox, Application Keys & Integration Marketplace</h4>
        <p class="text-muted mb-4">Generate production & sandbox API keys, register third-party OAuth2 applications, configure webhooks, download SDKs (PHP, Python, Node, Go, Java, Swift, Kotlin), and test endpoints in real-time.</p>
        <button class="btn btn-primary btn-sm">Register New Developer Application</button>
    </div>
</div>
@endsection
