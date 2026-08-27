<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGovernanceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Enterprise Governance, Risk & Control Intelligence OS Command Center';
    }

    public function index()
    {
        return view('governance_intelligence.command_center', $this->data);
    }
}
