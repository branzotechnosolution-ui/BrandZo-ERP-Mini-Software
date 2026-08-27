@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">AGI Enterprise Command Center</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">AGI Intelligence Level</h6>
                <h3 class="font-weight-bold text-primary mb-0">Level 5 AGI</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Decisions Generated</h6>
                <h3 class="font-weight-bold text-dark mb-0">8,420</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">AI Accuracy Score</h6>
                <h3 class="font-weight-bold text-success mb-0">99.8%</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Optimization Score</h6>
                <h3 class="font-weight-bold text-info mb-0">98.5 / 100</h3>
            </div>
        </div>
    </div>
</div>
@endsection
