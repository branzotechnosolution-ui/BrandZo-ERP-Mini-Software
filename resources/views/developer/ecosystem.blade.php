@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Global Developer Ecosystem Hub</h2>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">Developer Portal & SDK Downloads</h4>
        <p class="text-muted mb-4">Manage developer API keys, download PHP/Node.js/Python SDKs, and submit apps to the BrandZo Marketplace.</p>
        <button class="btn btn-primary btn-sm me-2">Create API Key</button>
        <button class="btn btn-outline-primary btn-sm">Submit App for Review</button>
    </div>
</div>
@endsection
