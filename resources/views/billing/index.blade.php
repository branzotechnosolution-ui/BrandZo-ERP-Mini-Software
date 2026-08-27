@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">SaaS Subscription & Billing Dashboard</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Current Plan</h6>
                <h3 class="font-weight-bold text-primary mb-0">Global Enterprise Plan</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">AI Tokens Remaining</h6>
                <h3 class="font-weight-bold text-success mb-0">Unlimited Tokens</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Monthly Billing</h6>
                <h3 class="font-weight-bold text-dark mb-0">,999 / mo</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Gateways Active</h6>
                <h3 class="font-weight-bold text-info mb-0">Stripe + Razorpay</h3>
            </div>
        </div>
    </div>
</div>
@endsection
