<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAnalyticsIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Enterprise Analytics & Business Intelligence Intelligence OS Command Center';
    }

    public function index()
    {
        return view('analytics_intelligence.command_center', $this->data);
    }
}
