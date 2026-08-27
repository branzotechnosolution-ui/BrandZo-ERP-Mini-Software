@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">AI Agent Training Studio</h2>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">Upload Knowledge Base & Documents</h4>
        <p class="text-muted mb-4">Train custom AI employees using company PDFs, product catalogs, FAQ manuals, and conversation logs.</p>
        <button class="btn btn-primary btn-sm">Upload Training File</button>
    </div>
</div>
@endsection
