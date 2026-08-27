@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">BrandZo App Marketplace 2.0</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">HRMS & Biometric Pro</h5>
                <p class="text-muted f-14 mb-3">Category: HR | Rating: 4.9 ★ (1,240 installs)</p>
                <button class="btn btn-sm btn-success">Installed</button>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">AI WhatsApp Copilot</h5>
                <p class="text-muted f-14 mb-3">Category: AI | Rating: 5.0 ★ (3,110 installs)</p>
                <button class="btn btn-sm btn-primary">One-Click Install</button>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-2">Tally & GST AutoSync</h5>
                <p class="text-muted f-14 mb-3">Category: Finance | Rating: 4.8 ★ (890 installs)</p>
                <button class="btn btn-sm btn-primary">One-Click Install</button>
            </div>
        </div>
    </div>
</div>
@endsection
