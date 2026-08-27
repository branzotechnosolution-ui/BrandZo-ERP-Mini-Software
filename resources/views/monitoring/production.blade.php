@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Production Monitoring & Observability</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Application SLA</h6>
                <h3 class="font-weight-bold text-success mb-0">99.999%</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Average Latency</h6>
                <h3 class="font-weight-bold text-primary mb-0">18ms</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Redis Cluster Nodes</h6>
                <h3 class="font-weight-bold text-dark mb-0">10 Nodes Active</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Worker Processing</h6>
                <h3 class="font-weight-bold text-info mb-0">2,450 Jobs/sec</h3>
            </div>
        </div>
    </div>
</div>
@endsection
