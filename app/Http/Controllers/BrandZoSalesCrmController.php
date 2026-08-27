<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class BrandZoSalesCrmController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Advanced Sales CRM Dashboard';
    }

    public function index()
    {
        $companyId = company() ? company()->id : 1;
        $this->totalLeads = Lead::where('company_id', $companyId)->count();
        $this->pipelineValue = Lead::where('company_id', $companyId)->sum('value');

        return view('crm.sales_dashboard', $this->data);
    }
}
