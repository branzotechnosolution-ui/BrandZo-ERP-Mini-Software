@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Marketing Automation Studio</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Email Campaigns Sent</h6>
                <h4 class="font-weight-bold text-primary mb-0">12,450</h4>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">WhatsApp Broadcasts</h6>
                <h4 class="font-weight-bold text-success mb-0">8,920</h4>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Lead Nurture Journeys</h6>
                <h4 class="font-weight-bold text-info mb-0">24 Active</h4>
            </div>
        </div>
    </div>
</div>
@endsection
