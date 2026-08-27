<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAgentMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Agent Marketplace 3.0 Platform';
    }

    public function index()
    {
        return view('agents.marketplace', $this->data);
    }
}
