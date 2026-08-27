@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Global Enterprise Cloud Admin Console</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">US East Region (us-east-1)</h5>
                <p class="text-muted f-14 mb-2">Status: Active | 99.999% SLA</p>
                <span class="badge badge-success">4 Nodes / 12 Pods</span>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">Asia Pacific Region (ap-south-1)</h5>
                <p class="text-muted f-14 mb-2">Status: Active | 99.999% SLA</p>
                <span class="badge badge-success">6 Nodes / 18 Pods</span>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">Europe Region (eu-central-1)</h5>
                <p class="text-muted f-14 mb-2">Status: Active | 99.999% SLA</p>
                <span class="badge badge-success">3 Nodes / 9 Pods</span>
            </div>
        </div>
    </div>
</div>
@endsection
