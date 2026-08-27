<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoEnterpriseSimulationController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise AI Simulation Center 2.0';
    }

    public function index()
    {
        return view('simulation.enterprise', $this->data);
    }
}
