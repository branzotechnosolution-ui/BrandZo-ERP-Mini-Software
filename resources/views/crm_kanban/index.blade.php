@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">BrandZo Interactive CRM Kanban Pipeline Board 📋🔀📊💼🎯</h2>
        <span class="badge badge-success px-3 py-2 f-14">PIPELINE VALUE: ,850,000.00 • 61.97% CONVERSION RATE</span>
    </div>

    <!-- Analytics Header Bar -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Total Pipeline Value</h6>
                <h3 class="font-weight-bold text-success mb-0">,850,000.00</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Lead-to-Client Win Rate</h6>
                <h3 class="font-weight-bold text-primary mb-0">61.97% Win Rate</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Active Lead Cards</h6>
                <h3 class="font-weight-bold text-info mb-0">142 Lead Cards</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Active Deal Cards</h6>
                <h3 class="font-weight-bold text-dark mb-0">88 Deal Cards</h3>
            </div>
        </div>
    </div>

    <!-- Lead Kanban Board -->
    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">1. Interactive Lead Kanban Board</h4>
        <div class="row text-center">
            <div class="col mb-2">
                <div class="bg-light p-3 rounded border">
                    <h6 class="font-weight-bold text-primary mb-1">New Lead (34)</h6>
                    <div class="card p-2 text-left shadow-sm border-0 bg-white mb-2">
                        <strong>ABC Technologies</strong><br>
                        <small class="text-muted">Assigned: Sales User</small><br>
                        <span class="badge badge-primary f-10">📞 Call Scheduled</span>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="bg-light p-3 rounded border">
                    <h6 class="font-weight-bold text-secondary mb-1">Contacted (28)</h6>
                    <div class="card p-2 text-left shadow-sm border-0 bg-white mb-2">
                        <strong>Apex Corp</strong><br>
                        <small class="text-muted">Assigned: Account Exec</small><br>
                        <span class="badge badge-info f-10">💬 WA Sent</span>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="bg-light p-3 rounded border">
                    <h6 class="font-weight-bold text-warning mb-1">Follow Up (24)</h6>
                    <div class="card p-2 text-left shadow-sm border-0 bg-white mb-2">
                        <strong>Global Logistics</strong><br>
                        <small class="text-muted">Assigned: Sales Mgr</small><br>
                        <span class="badge badge-warning f-10">📅 Meeting Set</span>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="bg-light p-3 rounded border">
                    <h6 class="font-weight-bold text-info mb-1">Qualified (32)</h6>
                    <div class="card p-2 text-left shadow-sm border-0 bg-white mb-2">
                        <strong>Summit Retail</strong><br>
                        <small class="text-muted">Assigned: Sr Exec</small><br>
                        <span class="badge badge-success f-10">Qualified</span>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="bg-light p-3 rounded border">
                    <h6 class="font-weight-bold text-success mb-1">Convert To Deal (24)</h6>
                    <div class="card p-2 text-left shadow-sm border-0 bg-white mb-2">
                        <strong>Vanguard Media</strong><br>
                        <button class="btn btn-xs btn-success btn-block mt-1">Convert To Deal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deal Kanban Board -->
    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">2. Interactive Deal Kanban Board</h4>
        <div class="row text-center">
            <div class="col mb-2">
                <div class="bg-light p-3 rounded border">
                    <h6 class="font-weight-bold text-primary mb-1">New Deal (K)</h6>
                    <div class="card p-2 text-left shadow-sm border-0 bg-white mb-2">
                        <strong>Acme Enterprise OS</strong><br>
                        <span class="text-success font-weight-bold">,000.00</span><br>
                        <small class="text-muted">Probability: 30%</small>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="bg-light p-3 rounded border">
                    <h6 class="font-weight-bold text-secondary mb-1">Proposal (.2M)</h6>
                    <div class="card p-2 text-left shadow-sm border-0 bg-white mb-2">
                        <strong>TechCorp Cloud ERP</strong><br>
                        <span class="text-success font-weight-bold">,000.00</span><br>
                        <small class="text-muted">Probability: 50%</small>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="bg-light p-3 rounded border">
                    <h6 class="font-weight-bold text-warning mb-1">Negotiation (.8M)</h6>
                    <div class="card p-2 text-left shadow-sm border-0 bg-white mb-2">
                        <strong>Starlight Global AI</strong><br>
                        <span class="text-success font-weight-bold">,000.00</span><br>
                        <small class="text-muted">Probability: 85%</small>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="bg-light p-3 rounded border">
                    <h6 class="font-weight-bold text-info mb-1">Won (.4M)</h6>
                    <div class="card p-2 text-left shadow-sm border-0 bg-white mb-2">
                        <strong>Nexus AI Platform</strong><br>
                        <span class="text-success font-weight-bold">,000.00</span><br>
                        <small class="text-muted">Probability: 100%</small>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="bg-light p-3 rounded border">
                    <h6 class="font-weight-bold text-success mb-1">Convert To Client</h6>
                    <div class="card p-2 text-left shadow-sm border-0 bg-white mb-2">
                        <strong>Zenith Holdings</strong><br>
                        <button class="btn btn-xs btn-primary btn-block mt-1">Convert To Client</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
