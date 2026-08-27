<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCustomerIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Customer Intelligence Network';
    }

    public function index()
    {
        return view('customer.intelligence_network', $this->data);
    }
}
