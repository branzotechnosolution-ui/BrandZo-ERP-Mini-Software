@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Enterprise Knowledge Brain Command Center</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Total Knowledge Records</h6>
                <h3 class="font-weight-bold text-primary mb-0">1,840,000</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Knowledge Graph Nodes</h6>
                <h3 class="font-weight-bold text-success mb-0">2.45 Million</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Permanent Company Memories</h6>
                <h3 class="font-weight-bold text-dark mb-0">482,000 Nodes</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Auto-Generated SOPs</h6>
                <h3 class="font-weight-bold text-info mb-0">1,420 SOPs</h3>
            </div>
        </div>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">AI Semantic Knowledge Retrieval & Graph Search</h4>
        <p class="text-muted mb-4">Perform natural language semantic queries across historical decisions, successful strategies, lessons learned, and cross-departmental relationship graphs.</p>
        <button class="btn btn-primary btn-sm">Query Company Knowledge Memory</button>
    </div>
</div>
@endsection
