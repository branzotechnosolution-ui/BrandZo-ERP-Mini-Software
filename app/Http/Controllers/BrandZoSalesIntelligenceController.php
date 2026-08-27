<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoSalesIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo AI Sales Demo & Lead Conversion Command Center';
    }

    public function index()
    {
        return view('sales_intelligence.command_center', $this->data);
    }
}
