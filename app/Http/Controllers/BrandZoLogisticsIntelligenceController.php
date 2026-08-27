<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoLogisticsIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Logistics & Delivery Intelligence OS Command Center';
    }

    public function index()
    {
        return view('logistics_intelligence.command_center', $this->data);
    }
}
