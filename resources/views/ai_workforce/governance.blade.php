@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Human-in-the-Loop AI Governance Queue</h2>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">Pending Human Approval Queue</h4>
        <div class="border rounded p-3 mb-3 d-flex justify-content-between align-items-center">
            <div>
                <h6 class="font-weight-bold text-dark mb-1">AI Employee #101 requested: Send bulk WhatsApp campaign to 500 leads</h6>
                <p class="text-muted f-14 mb-0">Status: Pending Human Approval</p>
            </div>
            <div>
                <button class="btn btn-sm btn-success me-2">Approve</button>
                <button class="btn btn-sm btn-danger">Reject</button>
            </div>
        </div>
    </div>
</div>
@endsection
