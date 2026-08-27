<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGlobalIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Enterprise Intelligence Network OS Command Center';
    }

    public function index()
    {
        return view('intelligence.global_network', $this->data);
    }
}
