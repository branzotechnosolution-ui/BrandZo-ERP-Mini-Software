@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">BrandZo CRM Dashboard</h2>
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="f-14 text-dark-grey mb-1">Total Leads</p>
                        <h3 class="f-24 font-weight-bold text-dark mb-0">{{ $totalLeads }}</h3>
                    </div>
                    <div class="bg-light-blue p-3 rounded-circle text-primary">
                        <i class="fa fa-users f-18"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="f-14 text-dark-grey mb-1">New Leads Today</p>
                        <h3 class="f-24 font-weight-bold text-success mb-0">{{ $newLeadsToday }}</h3>
                    </div>
                    <div class="bg-light-green p-3 rounded-circle text-success">
                        <i class="fa fa-user-plus f-18"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="f-14 text-dark-grey mb-1">Pending Follow-ups</p>
                        <h3 class="f-24 font-weight-bold text-warning mb-0">{{ $pendingFollowUps }}</h3>
                    </div>
                    <div class="bg-light-yellow p-3 rounded-circle text-warning">
                        <i class="fa fa-clock f-18"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="f-14 text-dark-grey mb-1">Pipeline Value</p>
                        <h3 class="f-24 font-weight-bold text-primary mb-0">${{ number_format($totalPipelineValue, 2) }}</h3>
                    </div>
                    <div class="bg-light-blue p-3 rounded-circle text-primary">
                        <i class="fa fa-chart-line f-18"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
