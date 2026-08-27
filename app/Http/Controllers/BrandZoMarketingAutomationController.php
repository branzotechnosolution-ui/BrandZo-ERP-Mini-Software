<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoMarketingAutomationController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Marketing Automation & Campaign ROI Dashboard';
    }

    public function index()
    {
        return view('marketing_automation.campaign_roi_dashboard', $this->data);
    }
}
