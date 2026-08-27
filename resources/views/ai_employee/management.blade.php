@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">AI Employee Management Center 2.0</h2>
        <button class="btn btn-primary btn-sm">+ Hire AI Employee</button>
    </div>

    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">AI Sales Department</h5>
                <p class="text-muted f-14 mb-2">3 AI Employees Active | 98.8% Workload</p>
                <span class="badge badge-success">Autonomous</span>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">AI Marketing Department</h5>
                <p class="text-muted f-14 mb-2">2 AI Employees Active | 97.4% Workload</p>
                <span class="badge badge-success">Autonomous</span>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">AI Finance Department</h5>
                <p class="text-muted f-14 mb-2">2 AI Employees Active | 99.1% Workload</p>
                <span class="badge badge-success">Autonomous</span>
            </div>
        </div>
    </div>
</div>
@endsection
