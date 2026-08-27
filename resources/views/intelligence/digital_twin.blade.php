@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Digital Twin Business Simulation Center</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">Revenue What-If Simulation</h5>
                <p class="text-muted f-14 mb-3">Simulate impact of pricing changes, sales capacity, and marketing budgets.</p>
                <button class="btn btn-sm btn-primary">Run Revenue Simulation</button>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">Workforce & Operations Simulation</h5>
                <p class="text-muted f-14 mb-3">Simulate hiring scenarios, workload capacity, and productivity output.</p>
                <button class="btn btn-sm btn-info">Run Operations Simulation</button>
            </div>
        </div>
    </div>
</div>
@endsection
