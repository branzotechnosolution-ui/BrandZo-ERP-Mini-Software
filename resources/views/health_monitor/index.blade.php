@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Real-Time System Health Monitor</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Database Status</h6>
                <h4 class="font-weight-bold text-success mb-0">{{ $healthMetrics['database_status'] }}</h4>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Queue Worker</h6>
                <h4 class="font-weight-bold text-info mb-0">{{ $healthMetrics['queue_status'] }}</h4>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">PHP Version</h6>
                <h4 class="font-weight-bold text-primary mb-0">{{ $healthMetrics['php_version'] }}</h4>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Server Memory Usage</h6>
                <h4 class="font-weight-bold text-warning mb-0">{{ $healthMetrics['server_memory'] }}</h4>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Storage Usage</h6>
                <h4 class="font-weight-bold text-dark mb-0">{{ $healthMetrics['storage_usage'] }}</h4>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Overall App Health</h6>
                <h4 class="font-weight-bold text-success mb-0">{{ $healthMetrics['app_health'] }}% Operational</h4>
            </div>
        </div>
    </div>
</div>
@endsection
