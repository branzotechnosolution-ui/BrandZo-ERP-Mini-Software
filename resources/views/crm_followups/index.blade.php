@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">BranZo Advanced Follow-up System & Calendar Matrix ⏰🔔📞📅💬</h2>
        <span class="badge badge-primary px-3 py-2 f-14">24 PENDING FOLLOW-UPS • CALL / MEETING / WHATSAPP / EMAIL</span>
    </div>

    <!-- Followup Metrics Grid -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Pending Follow-ups</h6>
                <h3 class="font-weight-bold text-warning mb-0">24 Pending</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Completed Follow-ups</h6>
                <h3 class="font-weight-bold text-success mb-0">118 Completed</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Overdue SLA Alerts</h6>
                <h3 class="font-weight-bold text-danger mb-0">2 Overdue</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Active Channels</h6>
                <h3 class="font-weight-bold text-info mb-0">Call / Meet / WA / Email</h3>
            </div>
        </div>
    </div>

    <!-- Calendar Matrix & Task Management -->
    <div class="row mb-4">
        <div class="col-md-8 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h4 class="f-18 font-weight-bold text-dark mb-3">Interactive Follow-up Schedule Calendar Matrix</h4>
                <div class="p-3 bg-light rounded text-center mb-3">
                    <span class="badge badge-primary mx-1">📞 Call (45)</span>
                    <span class="badge badge-success mx-1">📅 Meeting (32)</span>
                    <span class="badge badge-warning mx-1">💬 WhatsApp (38)</span>
                    <span class="badge badge-info mx-1">✉️ Email (27)</span>
                </div>
                <table class="table table-bordered mb-0 text-center">
                    <thead class="thead-light">
                        <tr>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                            <th>Sun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1<br><span class="badge badge-primary f-10">2 Calls</span></td>
                            <td>2<br><span class="badge badge-success f-10">1 Meet</span></td>
                            <td>3<br><span class="badge badge-warning f-10">3 WA</span></td>
                            <td>4<br><span class="badge badge-info f-10">2 Emails</span></td>
                            <td class="bg-light-primary"><strong>Today</strong><br><span class="badge badge-danger f-10">4 Tasks</span></td>
                            <td>6<br><span class="text-muted f-10">Weekend</span></td>
                            <td>7<br><span class="text-muted f-10">Weekend</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h4 class="f-18 font-weight-bold text-dark mb-3">Pending Follow-ups Widget</h4>
                <div class="border-bottom pb-2 mb-2">
                    <strong class="text-dark">Acme Discovery Call</strong><br>
                    <span class="badge badge-primary">📞 Call</span> <span class="text-muted f-12">Today, 03:00 PM</span><br>
                    <small class="text-muted">Assignee: Senior Sales Executive</small>
                </div>
                <div class="border-bottom pb-2 mb-2">
                    <strong class="text-dark">TechCorp Proposal Review</strong><br>
                    <span class="badge badge-success">📅 Meeting</span> <span class="text-muted f-12">Tomorrow, 11:00 AM</span><br>
                    <small class="text-muted">Assignee: Account Manager</small>
                </div>
                <div class="pt-2">
                    <button class="btn btn-primary btn-block btn-sm">Schedule New Follow-up Task</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
