@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">BrandZo AI Lead Scoring & Intent Intelligence Engine 🧠📊🔥❄️🔮</h2>
        <span class="badge badge-danger px-3 py-2 f-14">42 HOT LEADS (15-MIN SLA) • AVG AI SCORE: 72.40</span>
    </div>

    <!-- AI Scoring Metrics Grid -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Average AI Score</h6>
                <h3 class="font-weight-bold text-primary mb-0">72.40 / 100</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">🔥 HOT LEADS (80-100)</h6>
                <h3 class="font-weight-bold text-danger mb-0">42 Leads (15m SLA)</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">⚡ WARM LEADS (50-79)</h6>
                <h3 class="font-weight-bold text-warning mb-0">68 Leads (2h SLA)</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">❄️ COLD LEADS (0-49)</h6>
                <h3 class="font-weight-bold text-info mb-0">32 Leads (Nurture)</h3>
            </div>
        </div>
    </div>

    <!-- AI Recommendation Panel & Intent Matrix -->
    <div class="row mb-4">
        <div class="col-md-8 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="f-18 font-weight-bold text-dark mb-3">AI Intent Classification & SLA Action Matrix</h4>
                <table class="table table-bordered mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th>Intent Category</th>
                            <th>Score Range</th>
                            <th>Target SLA</th>
                            <th>Automated Action Trigger</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="badge badge-danger">🔥 HOT LEAD</span></td>
                            <td>80 - 100</td>
                            <td>15 Minutes</td>
                            <td>High Priority Notification to Senior Execs</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-warning">⚡ WARM LEAD</span></td>
                            <td>50 - 79</td>
                            <td>2 Hours</td>
                            <td>Follow-up Suggestion & Proposal Send</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-info">❄️ COLD LEAD</span></td>
                            <td>0 - 49</td>
                            <td>Nurture</td>
                            <td>Automated Email & WhatsApp Drip Campaign</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="f-18 font-weight-bold text-dark mb-3">AI Recommendation Panel</h4>
                <div class="p-3 bg-light rounded mb-3">
                    <strong class="text-dark">Acme Global Enterprises</strong><br>
                    <span class="badge badge-danger">Score: 92/100 (HOT LEAD)</span><br>
                    <small class="text-muted">Reason: Large enterprise budget (K) with high urgency.</small><br>
                    <div class="mt-2 pt-2 border-top">
                        <strong class="text-success f-12">Recommended Next Action:</strong><br>
                        <span class="f-12 text-dark">Schedule immediate discovery call within 15 mins.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
