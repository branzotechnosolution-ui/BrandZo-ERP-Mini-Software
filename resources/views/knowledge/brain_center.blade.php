@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Global Knowledge Brain OS Command Center</h2>
        <span class="badge badge-success px-3 py-2 f-14">KNOWLEDGE BRAIN ACTIVE</span>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Indexed Knowledge Nodes</h6>
                <h3 class="font-weight-bold text-primary mb-0">520,000 Nodes</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Knowledge Graph Edges</h6>
                <h3 class="font-weight-bold text-success mb-0">1,840,000 Edges</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Memory Retention Score</h6>
                <h3 class="font-weight-bold text-dark mb-0">99.98% Retention</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Research Insights</h6>
                <h3 class="font-weight-bold text-info mb-0">3,840 Insights</h3>
            </div>
        </div>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">Central AI Knowledge Repository, Memory System & Research Intelligence</h4>
        <p class="text-muted mb-4">Continuous automated learning from CRM, ERP, HRMS, Finance, documents, and AI agents into long-term organizational memory with 99.8% context mapping accuracy.</p>
        <button class="btn btn-primary btn-sm">Trigger Continuous Knowledge Sync</button>
    </div>
</div>
@endsection
