@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Enterprise Admin Control Plane</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Total SaaS Companies</h6>
                <h3 class="font-weight-bold text-primary mb-0">14,200 Tenants</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Annual Recurring Revenue</h6>
                <h3 class="font-weight-bold text-success mb-0">₹1.84 Crores ARR</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Support AI Auto-Resolution</h6>
                <h3 class="font-weight-bold text-dark mb-0">98.4% (< 1.4s)</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Customer Health Index</h6>
                <h3 class="font-weight-bold text-info mb-0">99.6 / 100</h3>
            </div>
        </div>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">Global SaaS Platform Operations & Self-Service Onboarding</h4>
        <p class="text-muted mb-4">Managing customer onboarding, tenant isolation, Razorpay/Stripe/PayPal billing, churn prediction, and enterprise support AI across 14,200 multi-tenant SaaS workspaces.</p>
        <button class="btn btn-primary btn-sm">Manage Global Tenant Workspaces</button>
    </div>
</div>
@endsection
