@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Enterprise Collaboration Universe OS Command Center</h2>
        <span class="badge badge-success px-3 py-2 f-14">AI COLLABORATION ACTIVE</span>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Active Workspaces</h6>
                <h3 class="font-weight-bold text-primary mb-0">384 Workspaces</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Meetings Summarized 24h</h6>
                <h3 class="font-weight-bold text-success mb-0">1,420 Meetings</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Active AI Projects</h6>
                <h3 class="font-weight-bold text-dark mb-0">384 Projects</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Productivity Boost</h6>
                <h3 class="font-weight-bold text-info mb-0">+42.8% Boost</h3>
            </div>
        </div>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">Team Workspace Management, AI Meeting Assistant & Project Management Universe</h4>
        <p class="text-muted mb-4">Real-time department project rooms, AI meeting summarization, smart task assignment, conversation sentiment analysis, and zero-risk project workload balancing.</p>
        <button class="btn btn-primary btn-sm">Launch Project Room</button>
    </div>
</div>
@endsection
