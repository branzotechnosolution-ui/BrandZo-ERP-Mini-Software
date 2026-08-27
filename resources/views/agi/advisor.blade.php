@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">AGI Executive Advisor Interface</h2>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4 col-md-9">
        <h5 class="font-weight-bold text-dark mb-3">Ask AGI CEO Advisor:</h5>
        <div class="mb-3">
            <button class="btn btn-sm btn-outline-primary me-2 mb-2">"How can we increase revenue?"</button>
            <button class="btn btn-sm btn-outline-primary me-2 mb-2">"Which department needs improvement?"</button>
            <button class="btn btn-sm btn-outline-primary me-2 mb-2">"Should we hire more employees?"</button>
            <button class="btn btn-sm btn-outline-primary me-2 mb-2">"Which service is most profitable?"</button>
            <button class="btn btn-sm btn-outline-primary mb-2">"What market should we enter next?"</button>
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="Type custom strategic question for AGI..."></textarea>
        </div>
        <button class="btn btn-primary btn-sm">Ask AGI Advisor</button>
    </div>
</div>
@endsection
