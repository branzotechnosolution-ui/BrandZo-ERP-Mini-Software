@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">AI Business & Services Marketplace</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-primary mb-2">Enterprise Cloud Engineering</h5>
                <p class="text-muted f-14 mb-3">Category: Software Services | AI Match: 99.2%</p>
                <button class="btn btn-sm btn-outline-primary">Submit Inquiry</button>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-primary mb-2">AI Marketing Automation Suite</h5>
                <p class="text-muted f-14 mb-3">Category: AI Solutions | AI Match: 98.6%</p>
                <button class="btn btn-sm btn-outline-primary">Submit Inquiry</button>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-primary mb-2">Global Financial Advisory</h5>
                <p class="text-muted f-14 mb-3">Category: Consulting | AI Match: 97.9%</p>
                <button class="btn btn-sm btn-outline-primary">Submit Inquiry</button>
            </div>
        </div>
    </div>
</div>
@endsection
