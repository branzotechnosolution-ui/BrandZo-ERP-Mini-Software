<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoTreasuryIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Banking & Treasury Intelligence OS Command Center';
    }

    public function index()
    {
        return view('treasury_intelligence.command_center', $this->data);
    }
}
