<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Agent Marketplace 2.0';
    }

    public function index()
    {
        return view('ai_marketplace.index', $this->data);
    }
}
