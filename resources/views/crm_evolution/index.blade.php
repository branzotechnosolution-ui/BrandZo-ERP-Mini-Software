@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">BrandZo ERP Enterprise CRM Evolution Dashboard 🤝💼📊📈🔄</h2>
        <span class="badge badge-success px-3 py-2 f-14">LEAD → DEAL → CLIENT PIPELINE ACTIVE • 61.97% CONVERSION</span>
    </div>

    <!-- CRM Evolution Metrics Grid -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Total Managed Leads</h6>
                <h3 class="font-weight-bold text-primary mb-0">142 Active Leads</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Active Enterprise Deals</h6>
                <h3 class="font-weight-bold text-success mb-0">88 Active Deals</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Converted Active Clients</h6>
                <h3 class="font-weight-bold text-dark mb-0">64 Enterprise Clients</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Lead-to-Client Win Rate</h6>
                <h3 class="font-weight-bold text-info mb-0">61.97% Win Rate</h3>
            </div>
        </div>
    </div>

    <!-- Lead Pipeline Visualizer -->
    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">1. Lead Pipeline Lifecycle Management</h4>
        <div class="d-flex justify-content-between text-center align-items-center p-3 bg-light rounded mb-3">
            <div class="badge badge-primary px-3 py-2">New Lead</div>
            <div>&rarr;</div>
            <div class="badge badge-secondary px-3 py-2">Contacted</div>
            <div>&rarr;</div>
            <div class="badge badge-warning px-3 py-2">Follow Up</div>
            <div>&rarr;</div>
            <div class="badge badge-info px-3 py-2">Qualified</div>
            <div>&rarr;</div>
            <div class="badge badge-success px-3 py-2">Convert To Deal</div>
        </div>
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Lead ID</th>
                    <th>Company</th>
                    <th>Contact Person</th>
                    <th>Budget</th>
                    <th>Assigned To</th>
                    <th>Stage</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>LEAD-2026-9942</strong></td>
                    <td>Acme Global Enterprises</td>
                    <td>John Doe (john@acmeglobal.com)</td>
                    <td>,000.00</td>
                    <td>Senior Sales Executive</td>
                    <td><span class="badge badge-info">Qualified</span></td>
                    <td><button class="btn btn-sm btn-success">Convert To Deal</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Deal Pipeline Visualizer -->
    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">2. Deal Pipeline Lifecycle Management</h4>
        <div class="d-flex justify-content-between text-center align-items-center p-3 bg-light rounded mb-3">
            <div class="badge badge-primary px-3 py-2">New Deal</div>
            <div>&rarr;</div>
            <div class="badge badge-secondary px-3 py-2">Proposal Sent</div>
            <div>&rarr;</div>
            <div class="badge badge-warning px-3 py-2">Negotiation</div>
            <div>&rarr;</div>
            <div class="badge badge-info px-3 py-2">Won</div>
            <div>&rarr;</div>
            <div class="badge badge-success px-3 py-2">Convert To Client</div>
        </div>
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Deal ID</th>
                    <th>Deal Name</th>
                    <th>Company</th>
                    <th>Deal Value</th>
                    <th>Probability</th>
                    <th>Stage</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>DEAL-2026-9942</strong></td>
                    <td>Acme Enterprise OS Deal</td>
                    <td>Acme Global Enterprises</td>
                    <td>,000.00</td>
                    <td>85%</td>
                    <td><span class="badge badge-success">Won</span></td>
                    <td><button class="btn btn-sm btn-primary">Convert To Client</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Client Profile Audit -->
    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">3. Converted Client Profiles & Contract Audit</h4>
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Client ID</th>
                    <th>Company</th>
                    <th>Contact Person</th>
                    <th>Total Contract Value</th>
                    <th>Subscription</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>CLI-2026-9942</strong></td>
                    <td>Acme Global Enterprises</td>
                    <td>John Doe</td>
                    <td>,000.00</td>
                    <td>Enterprise OS SaaS Suite</td>
                    <td><span class="badge badge-success">ACTIVE ENTERPRISE</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
