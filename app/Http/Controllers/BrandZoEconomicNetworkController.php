<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoEconomicNetworkController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Universal Economic Intelligence & Trust Network Dashboard';
    }

    public function index()
    {
        return view('dashboard.economic_network', $this->data);
    }
}
