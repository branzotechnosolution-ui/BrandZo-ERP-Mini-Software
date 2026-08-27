@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Advanced Team Collaboration Workspace</h2>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="font-weight-bold text-dark mb-2">Channels</h6>
                <ul class="list-unstyled f-14 text-dark-grey">
                    <li class="py-1 text-primary font-weight-bold"># Executive Leadership</li>
                    <li class="py-1"># Engineering</li>
                    <li class="py-1"># Sales</li>
                    <li class="py-1"># HR</li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h5 class="font-weight-bold text-dark mb-3">Channel: # Executive Leadership</h5>
                <p class="text-muted f-14 mb-4">AI Meeting Summary: "Q3 Enterprise Expansion strategy approved by board."</p>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Post a message to channel...">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
