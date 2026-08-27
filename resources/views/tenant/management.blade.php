@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">Global Tenant Management Console</h2>
        <button class="btn btn-primary btn-sm">+ Create Company Workspace</button>
    </div>

    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">Active Tenant Workspaces</h4>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Plan Type</th>
                        <th>Users</th>
                        <th>Storage</th>
                        <th>AI Tokens</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>BranZo Techno Solution</td>
                        <td>Global Enterprise</td>
                        <td>120 Users</td>
                        <td>420 GB</td>
                        <td>14.8M</td>
                        <td><span class="badge badge-success">Active</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
