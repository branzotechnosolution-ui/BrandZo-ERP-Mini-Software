<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGovernanceComplianceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Governance & Compliance Layer';
    }

    public function index()
    {
        return view('governance.dashboard', $this->data);
    }
}
