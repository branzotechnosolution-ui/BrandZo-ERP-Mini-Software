@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">BrandZo Automated Lead Routing & Assignment Engine 🔀🎯👔🛡️📊</h2>
        <span class="badge badge-primary px-3 py-2 f-14">142 LEADS ROUTED • VIP TRIGGER > ,000 • 4 ACTIVE RULES</span>
    </div>

    <!-- Routing Metrics Grid -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Auto-Assigned Leads</h6>
                <h3 class="font-weight-bold text-primary mb-0">142 Auto Assigned</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">VIP Leads Routed</h6>
                <h3 class="font-weight-bold text-success mb-0">24 VIP Leads</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Active Routing Rules</h6>
                <h3 class="font-weight-bold text-dark mb-0">4 Routing Rules</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">VIP Budget Threshold</h6>
                <h3 class="font-weight-bold text-danger mb-0">> ,000.00</h3>
            </div>
        </div>
    </div>

    <!-- Admin Rules & VIP Panel -->
    <div class="row mb-4">
        <div class="col-md-7 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="f-18 font-weight-bold text-dark mb-3">1. Admin Assignment Rule Management</h4>
                <table class="table table-bordered mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th>Rule Name</th>
                            <th>Description</th>
                            <th>Target Team</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Round Robin</strong></td>
                            <td>Equal rotational assignment</td>
                            <td>Sales Rep Team</td>
                            <td><span class="badge badge-success">ACTIVE</span></td>
                        </tr>
                        <tr>
                            <td><strong>Location Based</strong></td>
                            <td>Geographic territory matching</td>
                            <td>Regional Managers</td>
                            <td><span class="badge badge-success">ACTIVE</span></td>
                        </tr>
                        <tr>
                            <td><strong>Skill Based</strong></td>
                            <td>Enterprise OS product expertise</td>
                            <td>Solution Architects</td>
                            <td><span class="badge badge-success">ACTIVE</span></td>
                        </tr>
                        <tr>
                            <td><strong>Workload Quota Cap</strong></td>
                            <td>Maximum 50 active leads cap</td>
                            <td>All Sales Reps</td>
                            <td><span class="badge badge-success">ACTIVE</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-5 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="f-18 font-weight-bold text-dark mb-3">2. VIP Lead Routing Settings</h4>
                <div class="p-3 bg-light rounded mb-3">
                    <p class="mb-2"><strong>VIP Threshold Budget:</strong> ,000.00</p>
                    <p class="mb-2"><strong>Target Role:</strong> Senior Sales Directors</p>
                    <span class="badge badge-danger px-3 py-1">QUEUE BYPASS ACTIVE</span>
                </div>
                <button class="btn btn-primary btn-block btn-sm">Simulate Auto-Assignment Execution</button>
            </div>
        </div>
    </div>

    <!-- Assignment History Audit Log -->
    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">3. Lead Assignment History & Audit Trail</h4>
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Lead Code</th>
                    <th>Previous Owner</th>
                    <th>New Assigned Owner</th>
                    <th>Assignment Reason</th>
                    <th>Date & Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>LEAD-2026-9942</strong></td>
                    <td>Unassigned System Pool</td>
                    <td>Senior Sales Director (Ravi Kumar)</td>
                    <td><span class="badge badge-danger">VIP Budget Trigger (> ,000)</span></td>
                    <td>2026-08-21 19:13:00</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
