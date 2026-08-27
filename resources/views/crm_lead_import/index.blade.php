@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">BranZo Bulk Lead Import Engine & Column Mapper 📤📄🔍🛡️📊</h2>
        <span class="badge badge-success px-3 py-2 f-14">8,450 LEADS IMPORTED • 98.40% SUCCESS RATE • DEDUPLICATION ACTIVE</span>
    </div>

    <!-- Import Metrics Grid -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Total Import Batches</h6>
                <h3 class="font-weight-bold text-primary mb-0">18 Import Batches</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Total Imported Leads</h6>
                <h3 class="font-weight-bold text-success mb-0">8,450 Leads</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Import Success Rate</h6>
                <h3 class="font-weight-bold text-dark mb-0">98.40% Success</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Duplicate Match Strategy</h6>
                <h3 class="font-weight-bold text-info mb-0">Email / Phone / Company</h3>
            </div>
        </div>
    </div>

    <!-- Upload & Mapping Section -->
    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="f-18 font-weight-bold text-dark mb-3">1. Upload XLSX / CSV Lead File</h4>
                <div class="border-dashed rounded p-4 text-center bg-light mb-3">
                    <i class="fa fa-cloud-upload-alt text-primary f-36 mb-2"></i>
                    <p class="text-muted mb-2">Drag & Drop CSV or XLSX File Here (Up to 10,000 Rows)</p>
                    <button class="btn btn-outline-primary btn-sm">Browse Files</button>
                </div>
                <div class="form-group mb-2">
                    <label class="font-weight-bold text-dark">Duplicate Action Option:</label>
                    <select class="form-control form-control-sm">
                        <option>Skip Duplicate (Recommended)</option>
                        <option>Update Existing Lead Record</option>
                        <option>Merge Data Fields</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="font-weight-bold text-dark">Auto Assign Sales Employee:</label>
                    <select class="form-control form-control-sm">
                        <option>Senior Sales Team (Round Robin)</option>
                        <option>Sales User (Ravi Kumar)</option>
                        <option>Account Executive Team</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="f-18 font-weight-bold text-dark mb-3">2. 16-Field Column Mapper UI</h4>
                <table class="table table-sm table-bordered mb-3">
                    <thead class="thead-light">
                        <tr>
                            <th>CSV / XLSX File Header</th>
                            <th>CRM Target Lead Field</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>Organization Name</code></td>
                            <td><span class="badge badge-success">Company Name</span></td>
                        </tr>
                        <tr>
                            <td><code>Contact Name</code></td>
                            <td><span class="badge badge-success">Contact Person</span></td>
                        </tr>
                        <tr>
                            <td><code>Phone Number</code></td>
                            <td><span class="badge badge-success">Phone</span></td>
                        </tr>
                        <tr>
                            <td><code>Work Email</code></td>
                            <td><span class="badge badge-success">Email</span></td>
                        </tr>
                        <tr>
                            <td><code>Target Budget</code></td>
                            <td><span class="badge badge-success">Budget</span></td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-success btn-block btn-sm">Start Bulk Import Processing</button>
            </div>
        </div>
    </div>

    <!-- Import Job History -->
    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">3. Bulk Lead Import Batch History & Audit Logs</h4>
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Import Code</th>
                    <th>File Name</th>
                    <th>Uploaded By</th>
                    <th>Total Records</th>
                    <th>Success</th>
                    <th>Duplicates</th>
                    <th>Duplicate Strategy</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>IMP-2026-9942</strong></td>
                    <td>enterprise_leads_q3_2026.csv</td>
                    <td>Admin User</td>
                    <td>500</td>
                    <td><span class="text-success font-weight-bold">482</span></td>
                    <td><span class="text-warning font-weight-bold">15</span></td>
                    <td>Skip Duplicate</td>
                    <td><span class="badge badge-success">COMPLETED</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
