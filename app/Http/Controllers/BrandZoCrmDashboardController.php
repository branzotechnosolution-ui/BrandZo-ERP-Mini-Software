<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\LeadStatus;
use Illuminate\Http\Request;

class BrandZoCrmDashboardController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo CRM Dashboard';
    }

    public function index()
    {
        $companyId = company() ? company()->id : 1;

        $this->totalLeads = Lead::where('company_id', $companyId)->count();
        $this->newLeadsToday = Lead::where('company_id', $companyId)->whereDate('created_at', today())->count();
        $this->pendingFollowUps = Lead::where('company_id', $companyId)->whereNotNull('next_follow_up')->whereDate('next_follow_up', '<=', today())->count();
        
        $wonStatus = LeadStatus::where('company_id', $companyId)->where('type', 'Confirmed')->first();
        $lostStatus = LeadStatus::where('company_id', $companyId)->where('type', 'Lost')->first();

        $this->dealsWon = $wonStatus ? Lead::where('company_id', $companyId)->where('status_id', $wonStatus->id)->count() : 0;
        $this->dealsLost = $lostStatus ? Lead::where('company_id', $companyId)->where('status_id', $lostStatus->id)->count() : 0;
        $this->totalPipelineValue = Lead::where('company_id', $companyId)->sum('value');

        return view('dashboard.crm-dashboard', $this->data);
    }
}
