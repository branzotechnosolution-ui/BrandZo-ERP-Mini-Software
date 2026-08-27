@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">AI Board of Directors System</h2>
        <button class="btn btn-primary btn-sm">Start AI Board Meeting</button>
    </div>

    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">AI CEO Advisor</h5>
                <p class="text-muted f-14 mb-2">Strategic direction & vision</p>
                <span class="badge badge-success">Active</span>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">AI CFO Advisor</h5>
                <p class="text-muted f-14 mb-2">Financial risk & investment strategy</p>
                <span class="badge badge-success">Active</span>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">AI CTO Advisor</h5>
                <p class="text-muted f-14 mb-2">Tech stack & AI architecture</p>
                <span class="badge badge-success">Active</span>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">AI Marketing Advisor</h5>
                <p class="text-muted f-14 mb-2">Brand growth & customer acquisition</p>
                <span class="badge badge-success">Active</span>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">AI HR Advisor</h5>
                <p class="text-muted f-14 mb-2">Human & AI workforce planning</p>
                <span class="badge badge-success">Active</span>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">AI Legal Advisor</h5>
                <p class="text-muted f-14 mb-2">Compliance & contract auditing</p>
                <span class="badge badge-success">Active</span>
            </div>
        </div>
    </div>
</div>
@endsection
