<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoRevenueIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Enterprise CRM & Revenue Intelligence OS Command Center';
    }

    public function index()
    {
        return view('revenue_intelligence.command_center', $this->data);
    }
}
