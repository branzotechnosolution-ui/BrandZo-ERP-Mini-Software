@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">BrandZo Workflow Trigger & Action Automation Engine ⚡🔄🛠️📬🚀</h2>
        <span class="badge badge-success px-3 py-2 f-14">12 ACTIVE WORKFLOWS • 1,420 EXECUTIONS • 99.60% SUCCESS</span>
    </div>

    <!-- Workflow Metrics Grid -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Active Workflows</h6>
                <h3 class="font-weight-bold text-primary mb-0">12 Rules</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Total Executions</h6>
                <h3 class="font-weight-bold text-success mb-0">1,420 Jobs</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Execution Success Rate</h6>
                <h3 class="font-weight-bold text-dark mb-0">99.60% Success</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Supported Actions</h6>
                <h3 class="font-weight-bold text-info mb-0">Email / WA / Task / Webhook</h3>
            </div>
        </div>
    </div>

    <!-- No-Code IF-THEN Builder & Active Rules -->
    <div class="row mb-4">
        <div class="col-md-5 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="f-18 font-weight-bold text-dark mb-3">1. No-Code IF-THEN Workflow Builder</h4>
                <div class="form-group mb-2">
                    <label class="font-weight-bold text-dark">IF Trigger Event:</label>
                    <select class="form-control form-control-sm">
                        <option>Score Threshold Reached (AI Score > 80)</option>
                        <option>Lead Created</option>
                        <option>Lead Stage Changed</option>
                        <option>Follow-up Overdue</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label class="font-weight-bold text-dark">Condition Rule:</label>
                    <input type="text" class="form-control form-control-sm" value="AI Score > 80 AND Budget > ,000">
                </div>
                <div class="form-group mb-3">
                    <label class="font-weight-bold text-dark">THEN Automated Actions:</label>
                    <div class="p-2 bg-light rounded f-12">
                        ✔️ Assign Senior Sales Director<br>
                        ✔️ Create 15-Minute Follow-up Task<br>
                        ✔️ Send WhatsApp & Email Alert
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-sm">Activate Workflow Automation Rule</button>
            </div>
        </div>
        <div class="col-md-7 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="f-18 font-weight-bold text-dark mb-3">2. Active Automated Workflow Rules</h4>
                <table class="table table-bordered mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th>Workflow Name</th>
                            <th>Trigger Event</th>
                            <th>THEN Action</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Hot Lead Escalation</strong></td>
                            <td>Score Threshold Reached</td>
                            <td>Assign Senior + 15m Task + WA Alert</td>
                            <td><span class="badge badge-success">ACTIVE</span></td>
                        </tr>
                        <tr>
                            <td><strong>New Lead Welcome</strong></td>
                            <td>Lead Created</td>
                            <td>Send Welcome Email & Drip Enroll</td>
                            <td><span class="badge badge-success">ACTIVE</span></td>
                        </tr>
                        <tr>
                            <td><strong>Overdue SLA Alert</strong></td>
                            <td>Follow-up Overdue</td>
                            <td>Manager Email Alert + Reassign</td>
                            <td><span class="badge badge-success">ACTIVE</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Execution History Log -->
    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">3. Workflow Execution History & Audit Logs</h4>
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Execution Code</th>
                    <th>Trigger Event</th>
                    <th>Executed Action Sequence</th>
                    <th>Status</th>
                    <th>Timestamp</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>EXC-WKF-99420</strong></td>
                    <td>Score Threshold Reached (AI Score: 92)</td>
                    <td>Assigned Senior Exec, Created 15m Task, Dispatched WA Alert</td>
                    <td><span class="badge badge-success">SUCCESS</span></td>
                    <td>2026-08-21 19:16:00</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
