@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="f-24 font-weight-bold text-dark mb-0">BranZo Executive Sales Command Dashboard 📈📊💼🏆🔮</h2>
        <span class="badge badge-success px-3 py-2 f-14">REVENUE: ,200,000.00 • FORECAST: ,122,500.00</span>
    </div>

    <!-- 6 Overview Cards Grid -->
    <div class="row mb-4">
        <div class="col-md-2 mb-3">
            <div class="bg-white rounded p-3 shadow-sm border-0 text-center">
                <h6 class="text-muted f-12 mb-1">Total Leads</h6>
                <h4 class="font-weight-bold text-primary mb-0">142</h4>
            </div>
        </div>
        <div class="col-md-2 mb-3">
            <div class="bg-white rounded p-3 shadow-sm border-0 text-center">
                <h6 class="text-muted f-12 mb-1">Active Deals</h6>
                <h4 class="font-weight-bold text-info mb-0">88</h4>
            </div>
        </div>
        <div class="col-md-2 mb-3">
            <div class="bg-white rounded p-3 shadow-sm border-0 text-center">
                <h6 class="text-muted f-12 mb-1">Won Deals</h6>
                <h4 class="font-weight-bold text-success mb-0">64</h4>
            </div>
        </div>
        <div class="col-md-2 mb-3">
            <div class="bg-white rounded p-3 shadow-sm border-0 text-center">
                <h6 class="text-muted f-12 mb-1">Total Revenue</h6>
                <h4 class="font-weight-bold text-dark mb-0">.2M</h4>
            </div>
        </div>
        <div class="col-md-2 mb-3">
            <div class="bg-white rounded p-3 shadow-sm border-0 text-center">
                <h6 class="text-muted f-12 mb-1">Win Rate</h6>
                <h4 class="font-weight-bold text-warning mb-0">61.97%</h4>
            </div>
        </div>
        <div class="col-md-2 mb-3">
            <div class="bg-white rounded p-3 shadow-sm border-0 text-center">
                <h6 class="text-muted f-12 mb-1">Pipeline Value</h6>
                <h4 class="font-weight-bold text-danger mb-0">.85M</h4>
            </div>
        </div>
    </div>

    <!-- Sales Funnel & Revenue Forecast Section -->
    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="f-18 font-weight-bold text-dark mb-3">Sales Funnel & Stage Drop-off Analytics</h4>
                <div class="p-3 bg-light rounded text-center mb-3">
                    <div class="d-flex justify-content-between mb-2"><span>Lead (142)</span><strong>100%</strong></div>
                    <div class="progress mb-3" style="height:10px;"><div class="progress-bar bg-primary" style="width:100%"></div></div>
                    <div class="d-flex justify-content-between mb-2"><span>Contacted (114)</span><strong>80.28%</strong></div>
                    <div class="progress mb-3" style="height:10px;"><div class="progress-bar bg-info" style="width:80.28%"></div></div>
                    <div class="d-flex justify-content-between mb-2"><span>Qualified (96)</span><strong>67.60%</strong></div>
                    <div class="progress mb-3" style="height:10px;"><div class="progress-bar bg-warning" style="width:67.60%"></div></div>
                    <div class="d-flex justify-content-between mb-2"><span>Deal (88)</span><strong>61.97%</strong></div>
                    <div class="progress mb-3" style="height:10px;"><div class="progress-bar bg-secondary" style="width:61.97%"></div></div>
                    <div class="d-flex justify-content-between mb-2"><span>Client (64)</span><strong>45.07%</strong></div>
                    <div class="progress" style="height:10px;"><div class="progress-bar bg-success" style="width:45.07%"></div></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="bg-white rounded p-4 shadow-sm border-0 h-100">
                <h4 class="f-18 font-weight-bold text-dark mb-3">Weighted Revenue Forecasting (Value × Prob %)</h4>
                <div class="bg-light rounded p-4 text-center mb-3">
                    <h6 class="text-muted f-14 mb-2">Weighted Forecast Revenue</h6>
                    <h2 class="font-weight-bold text-success mb-2">,122,500.00</h2>
                    <span class="badge badge-info px-3 py-1">Monthly Q3 Forecast: ,374,166.67 / Mo</span>
                </div>
                <div class="border-top pt-3">
                    <h6 class="font-weight-bold text-dark mb-2">Lead Source Analytics Breakdown</h6>
                    <ul class="list-group list-group-flush f-14">
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0">Website Leads <span class="badge badge-primary badge-pill">54 (.25M)</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0">Referrals <span class="badge badge-success badge-pill">38 (K)</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0">Social Media <span class="badge badge-info badge-pill">24 (K)</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0">Advertisement <span class="badge badge-warning badge-pill">16 (K)</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0">Manual Entry <span class="badge badge-dark badge-pill">10 (K)</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Sales Employee Leaderboard -->
    <div class="bg-white rounded p-4 shadow-sm border-0 mb-4">
        <h4 class="f-18 font-weight-bold text-dark mb-3">Sales Representative Performance Leaderboard</h4>
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Sales Employee</th>
                    <th>Assigned Leads</th>
                    <th>Follow-ups Completed</th>
                    <th>Deals Closed</th>
                    <th>Revenue Generated</th>
                    <th>Performance Rank</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Sales User (Ravi Kumar)</strong></td>
                    <td>42</td>
                    <td>38</td>
                    <td>22</td>
                    <td><span class="text-success font-weight-bold">,100,000.00</span></td>
                    <td><span class="badge badge-success">RANK 1 🏆</span></td>
                </tr>
                <tr>
                    <td><strong>Senior Account Manager</strong></td>
                    <td>36</td>
                    <td>32</td>
                    <td>18</td>
                    <td><span class="text-success font-weight-bold">,000.00</span></td>
                    <td><span class="badge badge-primary">RANK 2 🥈</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
