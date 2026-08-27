<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiAgentMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo AI Agent Marketplace & Workforce Intelligence Dashboard';
    }

    public function index()
    {
        return view('ai_agent_marketplace.analytics_dashboard', $this->data);
    }
}
