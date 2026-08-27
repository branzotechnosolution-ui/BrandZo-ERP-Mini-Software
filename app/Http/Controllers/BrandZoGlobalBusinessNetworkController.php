<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGlobalBusinessNetworkController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Autonomous Business Network';
    }

    public function index()
    {
        return view('network.business_network', $this->data);
    }
}
