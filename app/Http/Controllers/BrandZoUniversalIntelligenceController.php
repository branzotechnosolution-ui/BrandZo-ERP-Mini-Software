<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoUniversalIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Universal Intelligence Layer OS Command Center';
    }

    public function index()
    {
        return view('intelligence.universal_center', $this->data);
    }
}
