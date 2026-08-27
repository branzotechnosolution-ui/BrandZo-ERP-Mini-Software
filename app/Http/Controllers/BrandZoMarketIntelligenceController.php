<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoMarketIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Global Market Intelligence & Competitive Dominance OS Command Center';
    }

    public function index()
    {
        return view('market_intelligence.command_center', $this->data);
    }
}
