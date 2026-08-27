@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Voice AI Executive Assistant</h2>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4 col-md-8 text-center py-5">
        <div class="mb-4">
            <i class="fa fa-microphone text-primary" style="font-size: 64px;"></i>
        </div>
        <h4 class="font-weight-bold text-dark mb-2">Listening for Voice Commands...</h4>
        <p class="text-muted mb-4">Try saying: "Show today's revenue", "Which clients need follow up?", or "Generate sales report".</p>
        <button class="btn btn-primary btn-lg">Tap to Speak</button>
    </div>
</div>
@endsection
