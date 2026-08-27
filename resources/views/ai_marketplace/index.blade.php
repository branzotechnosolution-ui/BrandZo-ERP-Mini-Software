@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">AI Agent Marketplace 2.0</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-primary mb-2">Sales Prospecting Bot</h5>
                <p class="text-muted f-14 mb-3">Category: Sales AI | Price: /mo</p>
                <button class="btn btn-sm btn-success">Installed</button>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-primary mb-2">Customer Support Copilot</h5>
                <p class="text-muted f-14 mb-3">Category: Support AI | Price: /mo</p>
                <button class="btn btn-sm btn-primary">Install Agent</button>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-primary mb-2">Financial Forecasting Agent</h5>
                <p class="text-muted f-14 mb-3">Category: Finance AI | Price: /mo</p>
                <button class="btn btn-sm btn-primary">Install Agent</button>
            </div>
        </div>
    </div>
</div>
@endsection
