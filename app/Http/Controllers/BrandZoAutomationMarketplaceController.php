<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAutomationMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Automation Marketplace & Business Workflow OS Command Center';
    }

    public function index()
    {
        return view('automation_marketplace.command_center', $this->data);
    }
}
