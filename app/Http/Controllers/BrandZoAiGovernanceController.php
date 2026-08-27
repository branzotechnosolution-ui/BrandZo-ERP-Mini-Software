<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiGovernanceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Agent Governance Center';
    }

    public function index()
    {
        return view('ai_governance.dashboard', $this->data);
    }
}
