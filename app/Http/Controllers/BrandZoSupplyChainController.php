<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoSupplyChainController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Supply Chain & Procurement Intelligence OS Command Center';
    }

    public function index()
    {
        return view('supply_chain.command_center', $this->data);
    }
}
