@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">AGI CEO Command Interface</h2>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4 col-md-9">
        <h5 class="font-weight-bold text-dark mb-3">AGI Strategic Command Prompts:</h5>
        <div class="mb-3">
            <button class="btn btn-sm btn-outline-primary me-2 mb-2">"How can BrandZo reach M ARR?"</button>
            <button class="btn btn-sm btn-outline-primary me-2 mb-2">"Which market should we enter?"</button>
            <button class="btn btn-sm btn-outline-primary me-2 mb-2">"Which product should we build next?"</button>
            <button class="btn btn-sm btn-outline-primary me-2 mb-2">"How can we reduce operational cost?"</button>
            <button class="btn btn-sm btn-outline-primary me-2 mb-2">"Create next 5 year strategy"</button>
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="Type custom strategic command for AGI CEO..."></textarea>
        </div>
        <button class="btn btn-primary btn-sm">Execute Command</button>
    </div>
</div>
@endsection
