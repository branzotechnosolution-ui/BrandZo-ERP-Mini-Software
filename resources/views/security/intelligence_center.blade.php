@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Enterprise Security Intelligence OS 3.0 & SOC Command Center</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Security Risk Score</h6>
                <h3 class="font-weight-bold text-primary mb-0">99.8 / 100 Safe</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Threats Blocked (24h)</h6>
                <h3 class="font-weight-bold text-success mb-0">1,420 Threats</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Regulatory Compliance</h6>
                <h3 class="font-weight-bold text-dark mb-0">100.00%</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Encryption Standard</h6>
                <h3 class="font-weight-bold text-info mb-0">AES-256 GCM</h3>
            </div>
        </div>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">AI Cyber Security Command Center, Identity Intelligence & Compliance Automation</h4>
        <p class="text-muted mb-4">Monitoring global threat vectors, adaptive WebAuthn MFA, device trust, automated evidence generation for SOC2 Type II, ISO 27001, GDPR, HIPAA, and PCI DSS compliance with zero data leak prevention (DLP).</p>
        <button class="btn btn-primary btn-sm">Run Real-Time Security Audit</button>
    </div>
</div>
@endsection
