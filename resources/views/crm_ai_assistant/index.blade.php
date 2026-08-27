@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">BranZo AI Sales Assistant & Smart Drip Campaign Engine 🤖✉️📱💬📊🚀</h2>
        <span class="badge badge-primary px-3 py-2 f-14">OPEN RATE: 64.20% • REPLY RATE: 38.50% • .45M REVENUE</span>
    </div>

    <!-- AI Assistant Metrics Grid -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Drip Email Open Rate</h6>
                <h3 class="font-weight-bold text-primary mb-0">64.20%</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">WhatsApp & Email Reply Rate</h6>
                <h3 class="font-weight-bold text-success mb-0">38.50%</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Enrolled Leads</h6>
                <h3 class="font-weight-bold text-dark mb-0">142 Leads</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Attributed Revenue</h6>
                <h3 class="font-weight-bold text-danger mb-0">,450,000.00</h3>
            </div>
        </div>
    </div>

    <!-- AI Sales Copilot & Reply Generator -->
    <div class="row mb-4">
        <div class="col-md-7 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="f-18 font-weight-bold text-dark mb-3">1. AI Sales Copilot & Meeting Prep Notes</h4>
                <div class="p-3 bg-light rounded mb-3">
                    <p class="mb-1"><strong>Lead Summary:</strong> Enterprise client evaluating BranZo AI ERP OS for 500+ seats.</p>
                    <p class="mb-1"><strong>Company Analysis:</strong> Fintech / SaaS leader expanding in North America.</p>
                    <p class="mb-1"><strong>Next Best Action:</strong> Schedule executive demo with Head of Architecture.</p>
                    <p class="mb-0"><strong>Meeting Prep Notes:</strong> Focus on SLA guarantees, custom API integrations, ISO 27001 compliance.</p>
                </div>
            </div>
        </div>
        <div class="col-md-5 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="f-18 font-weight-bold text-dark mb-3">2. AI Smart Reply Generator</h4>
                <div class="form-group mb-2">
                    <label class="font-weight-bold text-dark">Channel:</label>
                    <select class="form-control form-control-sm">
                        <option>WhatsApp</option>
                        <option>Email</option>
                    </select>
                </div>
                <div class="p-2 bg-light rounded f-12 mb-3">
                    "Hi Alex! Quick follow-up on the BranZo Techno Solution proposal sent yesterday. Let me know if you have 5 mins for a brief quick call today!"
                </div>
                <button class="btn btn-success btn-block btn-sm">Generate AI Smart Reply</button>
            </div>
        </div>
    </div>

    <!-- Smart Drip Campaign Matrix -->
    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">3. Smart Multi-Touch Drip Campaign Matrix</h4>
        <table class="table table-bordered mb-0">
            <thead class="thead-light">
                <tr>
                    <th>Target Intent</th>
                    <th>Day 0 Trigger</th>
                    <th>Day 1 / 3 Trigger</th>
                    <th>Day 7 Trigger</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><span class="badge badge-danger">🔥 HOT LEAD</span></td>
                    <td>WhatsApp Intro Message</td>
                    <td>Email Company Profile (Day 1)</td>
                    <td>Demo Follow-up Call (Day 3)</td>
                    <td><span class="badge badge-success">ACTIVE</span></td>
                </tr>
                <tr>
                    <td><span class="badge badge-warning">⚡ WARM LEAD</span></td>
                    <td>Email Overview & Case Studies</td>
                    <td>WhatsApp Reminder (Day 3)</td>
                    <td>Sales Executive Call (Day 7)</td>
                    <td><span class="badge badge-success">ACTIVE</span></td>
                </tr>
                <tr>
                    <td><span class="badge badge-info">❄️ COLD LEAD</span></td>
                    <td>Long-term Nurture Sequence</td>
                    <td>Monthly Newsletter Drip</td>
                    <td>Quarterly Re-engagement</td>
                    <td><span class="badge badge-success">ACTIVE</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
