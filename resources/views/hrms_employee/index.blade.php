@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">BranZo Enterprise HRMS - Employee Management Core 👔📁🏛️🏷️📊</h2>
        <span class="badge badge-primary px-3 py-2 f-14">184 ACTIVE EMPLOYEES • 8 DEPARTMENTS • 100% COMPLIANT</span>
    </div>

    <!-- HRMS Employee Metrics Grid -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Total Active Staff</h6>
                <h3 class="font-weight-bold text-primary mb-0">184 Employees</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Active Departments</h6>
                <h3 class="font-weight-bold text-success mb-0">8 Departments</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Full-Time Ratio</h6>
                <h3 class="font-weight-bold text-dark mb-0">88% Full-Time</h3>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0">
                <h6 class="text-muted f-14 mb-2">Monthly Payroll Base</h6>
                <h3 class="font-weight-bold text-danger mb-0">,250,000.00</h3>
            </div>
        </div>
    </div>

    <!-- Department Distribution & Onboarding Panel -->
    <div class="row mb-4">
        <div class="col-md-7 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="f-18 font-weight-bold text-dark mb-3">1. Department Distribution & Head Count</h4>
                <table class="table table-bordered mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th>Department Name</th>
                            <th>Department Head</th>
                            <th>Staff Count</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Engineering & AI</strong></td>
                            <td>Vikramaditya Sharma</td>
                            <td>48 Staff</td>
                            <td><span class="badge badge-success">ACTIVE</span></td>
                        </tr>
                        <tr>
                            <td><strong>Sales & CRM</strong></td>
                            <td>Ravi Kumar</td>
                            <td>38 Staff</td>
                            <td><span class="badge badge-success">ACTIVE</span></td>
                        </tr>
                        <tr>
                            <td><strong>Marketing & Growth</strong></td>
                            <td>Ananya Roy</td>
                            <td>24 Staff</td>
                            <td><span class="badge badge-success">ACTIVE</span></td>
                        </tr>
                        <tr>
                            <td><strong>HR & Talent Acquisition</strong></td>
                            <td>Priya Nair</td>
                            <td>16 Staff</td>
                            <td><span class="badge badge-success">ACTIVE</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-5 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="f-18 font-weight-bold text-dark mb-3">2. Quick Employee Onboarding</h4>
                <div class="form-group mb-2">
                    <label class="font-weight-bold text-dark">Full Name:</label>
                    <input type="text" class="form-control form-control-sm" value="Rohan Mehta">
                </div>
                <div class="form-group mb-2">
                    <label class="font-weight-bold text-dark">Department:</label>
                    <select class="form-control form-control-sm">
                        <option>Engineering & AI</option>
                        <option>Sales & CRM</option>
                        <option>Marketing & Growth</option>
                    </select>
                </div>
                <button class="btn btn-primary btn-block btn-sm mt-3">Onboard New Employee Profile</button>
            </div>
        </div>
    </div>

    <!-- Central Employee Directory Table -->
    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">3. Central Employee Directory & Master Audit Log</h4>
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Employee Code</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Monthly Salary</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>EMP-2026-9942</strong></td>
                    <td>Vikramaditya Sharma</td>
                    <td>vikram@branzo.in</td>
                    <td>Engineering & AI</td>
                    <td>Lead Software Architect</td>
                    <td>,000.00</td>
                    <td><span class="badge badge-success">ACTIVE</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
