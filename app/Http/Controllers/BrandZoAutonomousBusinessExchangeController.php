<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAutonomousBusinessExchangeController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Autonomous Business Exchange';
    }

    public function index()
    {
        return view('network.business_exchange', $this->data);
    }
}
