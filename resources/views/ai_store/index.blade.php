@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">AI Agent Marketplace</h2>
    </div>

    <div class="row">
        @foreach($agents as $agent)
            <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                <div class="bg-white rounded p-4 shadow-sm border-0">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h4 class="f-18 font-weight-bold text-dark mb-0">{{ $agent['name'] }}</h4>
                        <span class="badge badge-success">{{ $agent['status'] }}</span>
                    </div>
                    <p class="f-14 text-dark-grey mb-3">{{ $agent['role'] }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">{{ $agent['actions'] }} Actions Performed</small>
                        <button class="btn btn-sm btn-primary">Configure</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
