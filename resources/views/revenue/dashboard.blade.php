@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">SaaS Revenue Analytics Dashboard</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Monthly Recurring Revenue (MRR)</h6>
                <h3 class="font-weight-bold text-primary mb-0">₹1.84 Crores</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Annual Run Rate (ARR)</h6>
                <h3 class="font-weight-bold text-success mb-0">₹22.08 Crores</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Net Revenue Retention (NRR)</h6>
                <h3 class="font-weight-bold text-dark mb-0">138.4% NRR</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Customer Churn Rate</h6>
                <h3 class="font-weight-bold text-info mb-0">0.42% Churn</h3>
            </div>
        </div>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">AI Customer Expansion & Lifecycle Automation</h4>
        <p class="text-muted mb-4">Continuously analyzing usage spikes, automatically generating upgrade proposals, managing partner reseller revenue shares, and driving customer lifecycle expansion from Signup to Renewal.</p>
        <button class="btn btn-primary btn-sm">Execute AI Growth Opportunity Engine</button>
    </div>
</div>
@endsection
