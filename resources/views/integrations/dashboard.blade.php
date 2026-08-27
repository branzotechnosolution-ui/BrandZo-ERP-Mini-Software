@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Global Enterprise Integration Network & Real-Time Data Sync OS</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Active Connected Integrations</h6>
                <h3 class="font-weight-bold text-primary mb-0">38,400 Connectors</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Daily Sync Jobs Processed</h6>
                <h3 class="font-weight-bold text-success mb-0">1.84M Sync Jobs</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Data Mapping Accuracy</h6>
                <h3 class="font-weight-bold text-dark mb-0">99.6% Accuracy</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Real-Time Sync Latency</h6>
                <h3 class="font-weight-bold text-info mb-0">1.42 ms</h3>
            </div>
        </div>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">Universal Integration Hub & AI Data Synchronization Engine</h4>
        <p class="text-muted mb-4">Seamlessly sync enterprise data across Salesforce, SAP, QuickBooks, Shopify, Stripe, Slack, WhatsApp, and AWS/GCP Cloud Infrastructure. Automated conflict resolution, error recovery, and zero sync downtime.</p>
        <button class="btn btn-primary btn-sm">Connect New Integration Connector</button>
    </div>
</div>
@endsection
