@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Enterprise AI Command Center</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">AI OS Status</h6>
                <h4 class="font-weight-bold text-success mb-0">100% Operational</h4>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Active AI Agents</h6>
                <h4 class="font-weight-bold text-primary mb-0">12 Agents Active</h4>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Automated Workflows</h6>
                <h4 class="font-weight-bold text-info mb-0">86 Workflows</h4>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">AI Task Completion Rate</h6>
                <h4 class="font-weight-bold text-success mb-0">99.8%</h4>
            </div>
        </div>
    </div>
</div>
@endsection
