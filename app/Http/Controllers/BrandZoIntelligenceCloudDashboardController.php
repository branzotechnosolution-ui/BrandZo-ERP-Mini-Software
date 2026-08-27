<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoIntelligenceCloudDashboardController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Autonomous Business Intelligence Cloud 2.0';
    }

    public function index()
    {
        return view('dashboard.intelligence_cloud', $this->data);
    }
}
