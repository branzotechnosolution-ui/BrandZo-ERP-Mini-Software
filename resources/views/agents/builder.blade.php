@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">No-Code AI Agent Builder Studio 3.0</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Custom Agents Built</h6>
                <h3 class="font-weight-bold text-primary mb-0">14,200 Agents</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Connected Tool APIs</h6>
                <h3 class="font-weight-bold text-success mb-0">384 Tools</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Persistent Brain Memory</h6>
                <h3 class="font-weight-bold text-dark mb-0">1.42M Nodes</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Training Precision</h6>
                <h3 class="font-weight-bold text-info mb-0">99.4% Precision</h3>
            </div>
        </div>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">Custom AI Employee Creation, Knowledge Attachment & Testing</h4>
        <p class="text-muted mb-4">Build custom AI employees without code. Define role, objectives, attach company documents, grant API tool permissions, test in isolated sandboxes, and publish to the global marketplace.</p>
        <button class="btn btn-primary btn-sm">Build Custom AI Agent</button>
    </div>
</div>
@endsection
