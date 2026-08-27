@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Client Profile Header Card -->
    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <span class="badge badge-primary px-3 py-1 f-12 mb-2">CLIENT ID: CLI-2026-9942</span>
                <h2 class="f-24 font-weight-bold text-dark mb-1">Acme Global Enterprises 👤🏢📜💰📁📊</h2>
                <p class="text-muted mb-0 f-14">Enterprise Software & Technology • 100 Silicon Valley Blvd, Suite 400, CA</p>
            </div>
            <div class="text-right">
                <span class="badge badge-success px-3 py-2 f-14 mb-2">ACTIVE ENTERPRISE CLIENT</span><br>
                <small class="text-muted">Assigned Manager: Senior Account Executive</small>
            </div>
        </div>
        <div class="row border-top pt-3 text-muted f-14">
            <div class="col-md-3"><strong>Contact Person:</strong> John Doe (CEO)</div>
            <div class="col-md-3"><strong>Phone:</strong> +1-555-0199</div>
            <div class="col-md-3"><strong>Email:</strong> john@acmeglobal.com</div>
            <div class="col-md-3"><strong>Website:</strong> acmeglobal.com</div>
        </div>
    </div>

    <!-- Tabbed 360 Degree Sections -->
    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <ul class="nav nav-tabs mb-4" id="client360Tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active font-weight-bold" data-toggle="tab" href="#timelineTab">Relationship Timeline</a></li>
            <li class="nav-item"><a class="nav-link font-weight-bold" data-toggle="tab" href="#leadHistoryTab">Lead History</a></li>
            <li class="nav-item"><a class="nav-link font-weight-bold" data-toggle="tab" href="#dealHistoryTab">Deal History</a></li>
            <li class="nav-item"><a class="nav-link font-weight-bold" data-toggle="tab" href="#commTab">Communication Log</a></li>
            <li class="nav-item"><a class="nav-link font-weight-bold" data-toggle="tab" href="#docTab">Document Vault</a></li>
            <li class="nav-item"><a class="nav-link font-weight-bold" data-toggle="tab" href="#financeTab">Finance & Invoices</a></li>
            <li class="nav-item"><a class="nav-link font-weight-bold" data-toggle="tab" href="#projectTab">Projects & Support</a></li>
        </ul>

        <div class="tab-content" id="client360TabContent">
            <!-- 1. Relationship Timeline Tab -->
            <div class="tab-pane fade show active" id="timelineTab">
                <h5 class="font-weight-bold text-dark mb-3">End-to-End Lifecycle Audit Timeline</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0"><strong>2026-08-01 10:00:00</strong> — Lead Created (LEAD-2026-9942) via Website Ingestion</li>
                    <li class="list-group-item px-0"><strong>2026-08-05 14:30:00</strong> — Discovery Call Completed by Senior Sales Exec</li>
                    <li class="list-group-item px-0"><strong>2026-08-10 11:00:00</strong> — Converted to Deal (DEAL-2026-9942)</li>
                    <li class="list-group-item px-0"><strong>2026-08-15 16:00:00</strong> — Proposal Sent & Negotiated (,000.00 Value)</li>
                    <li class="list-group-item px-0"><strong>2026-08-20 09:00:00</strong> — Deal Won (100% Win Probability)</li>
                    <li class="list-group-item px-0"><strong>2026-08-21 18:49:15</strong> — Converted to Client Profile (CLI-2026-9942)</li>
                </ul>
            </div>

            <!-- 2. Lead History Tab -->
            <div class="tab-pane fade" id="leadHistoryTab">
                <h5 class="font-weight-bold text-dark mb-3">Original Lead Record Audit</h5>
                <p><strong>Original Lead Code:</strong> LEAD-2026-9942 | <strong>Source:</strong> Website Ingestion</p>
                <p><strong>Requirements:</strong> Enterprise AI OS deployment for 500 employee seats.</p>
                <p><strong>Notes:</strong> High urgency requirement. Fast procurement cycle.</p>
            </div>

            <!-- 3. Deal History Tab -->
            <div class="tab-pane fade" id="dealHistoryTab">
                <h5 class="font-weight-bold text-dark mb-3">Converted Deal History</h5>
                <p><strong>Deal Code:</strong> DEAL-2026-9942 | <strong>Value:</strong> ,000.00</p>
                <p><strong>Products/Services:</strong> Enterprise OS SaaS Suite | <strong>Win Probability:</strong> 100%</p>
            </div>

            <!-- 4. Communication Log -->
            <div class="tab-pane fade" id="commTab">
                <h5 class="font-weight-bold text-dark mb-3">Multi-Channel Communication Logs</h5>
                <p>📞 Calls: 4 Calls Logged | 📅 Meetings: 2 Demos | 💬 WhatsApp: 8 Messages | ✉️ Emails: 12 Threads</p>
            </div>

            <!-- 5. Document Vault -->
            <div class="tab-pane fade" id="docTab">
                <h5 class="font-weight-bold text-dark mb-3">Attached Client Documents</h5>
                <p>📁 Enterprise_SaaS_Contract_Signed.pdf | 📁 SLA_Agreement_v2.pdf | 📁 NDA_Signed.pdf</p>
            </div>

            <!-- 6. Finance & Invoices -->
            <div class="tab-pane fade" id="financeTab">
                <h5 class="font-weight-bold text-dark mb-3">Financial Ledger & Outstanding Balance</h5>
                <p><strong>Total Revenue Generated:</strong> ,000.00 | <strong>Paid:</strong> ,000.00 | <strong>Outstanding:</strong> ,000.00</p>
            </div>

            <!-- 7. Projects & Support -->
            <div class="tab-pane fade" id="projectTab">
                <h5 class="font-weight-bold text-dark mb-3">Active Projects & Open Support Tickets</h5>
                <p>🚀 3 Active Projects (Enterprise Onboarding, Data Migration) | 🎫 1 Open Support Ticket</p>
            </div>
        </div>
    </div>
</div>
@endsection
