<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoWorkflowMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Autonomous Workflow Marketplace & Automation Engine';
    }

    public function index()
    {
        return view('workflows.marketplace', $this->data);
    }
}
