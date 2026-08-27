<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoFinanceIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Finance Intelligence OS Command Center';
    }

    public function index()
    {
        return view('finance.intelligence_center', $this->data);
    }
}
