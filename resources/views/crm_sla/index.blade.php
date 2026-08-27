@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">BrandZo SLA Escalation & Smart Sales Monitoring Engine ⏰🚨📊🔔📈</h2>
        <span class="badge badge-success px-3 py-2 f-14">AVG RESPONSE: 11.40 MINS • 96.40% SLA COMPLIANCE</span>
    </div>

    <!-- SLA Metrics Grid -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Avg Response Time</h6>
                <h3 class="font-weight-bold text-primary mb-0">11.40 Mins</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">SLA Compliance Rate</h6>
                <h3 class="font-weight-bold text-success mb-0">96.40%</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">SLA Violations</h6>
                <h3 class="font-weight-bold text-danger mb-0">6 Breaches</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Pending Escalation Actions</h6>
                <h3 class="font-weight-bold text-dark mb-0">4 Pending</h3>
            </div>
        </div>
    </div>

    <!-- Escalation Matrix & Notification Settings -->
    <div class="row mb-4">
        <div class="col-md-7 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="f-18 font-weight-bold text-dark mb-3">1. Multi-Tier SLA Escalation Structure</h4>
                <table class="table table-bordered mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th>Escalation Level</th>
                            <th>Time Threshold</th>
                            <th>Target Role</th>
                            <th>Notification Channel</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="badge badge-primary">Tier 1</span></td>
                            <td>15 Minutes</td>
                            <td>Assigned Sales Rep</td>
                            <td>In-App Dashboard & Mobile Push Alert</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-warning">Tier 2</span></td>
                            <td>1 Hour (60 Mins)</td>
                            <td>Sales Manager</td>
                            <td>High-Priority Email & WhatsApp Alert</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-danger">Tier 3</span></td>
                            <td>24 Hours (1,440 Mins)</td>
                            <td>Automated System Engine</td>
                            <td>Auto-Reassign Lead to Senior Rep</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-5 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="f-18 font-weight-bold text-dark mb-3">2. Multi-Channel Notification Status</h4>
                <div class="p-3 bg-light rounded mb-3">
                    <p class="mb-2"><strong>✉️ Email Service:</strong> <span class="badge badge-success">ACTIVE</span></p>
                    <p class="mb-2"><strong>📱 WhatsApp Engine:</strong> <span class="badge badge-success">ACTIVE</span></p>
                    <p class="mb-0"><strong>🔔 Dashboard Push:</strong> <span class="badge badge-success">ACTIVE</span></p>
                </div>
                <button class="btn btn-primary btn-block btn-sm">Simulate SLA Breach Evaluation</button>
            </div>
        </div>
    </div>

    <!-- Escalation History Table -->
    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">3. SLA Escalation & Breach Audit Log</h4>
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Escalation Code</th>
                    <th>Lead Code</th>
                    <th>Escalation Tier</th>
                    <th>Action Taken</th>
                    <th>Status</th>
                    <th>Timestamp</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>ESC-SLA-99420</strong></td>
                    <td>LEAD-2026-9942</td>
                    <td><span class="badge badge-warning">Tier 2 Escalation</span></td>
                    <td>Escalation Email & WhatsApp Dispatched to Sales Manager</td>
                    <td><span class="badge badge-success">RESOLVED</span></td>
                    <td>2026-08-21 19:22:00</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
