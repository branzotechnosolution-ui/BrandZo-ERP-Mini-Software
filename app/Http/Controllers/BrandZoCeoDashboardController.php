<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Invoice;
use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;

class BrandZoCeoDashboardController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'CEO Executive Control Tower';
    }

    public function index()
    {
        $companyId = company() ? company()->id : 1;

        $this->totalRevenue = Invoice::where('company_id', $companyId)->where('status', 'paid')->sum('total');
        $this->activeCustomers = User::where('company_id', $companyId)->whereHas('roles', function ($q) { $q->where('name', 'client'); })->count();
        $this->activeProjects = Project::where('company_id', $companyId)->count();
        $this->businessHealthScore = 96;

        return view('ceo_dashboard.index', $this->data);
    }
}
