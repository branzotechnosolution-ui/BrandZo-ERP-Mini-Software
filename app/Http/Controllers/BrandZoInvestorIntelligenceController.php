<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoInvestorIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Investor & Capital Intelligence OS Command Center';
    }

    public function index()
    {
        return view('investor.intelligence_center', $this->data);
    }
}
