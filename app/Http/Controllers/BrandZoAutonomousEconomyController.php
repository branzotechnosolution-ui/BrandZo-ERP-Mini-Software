<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAutonomousEconomyController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Autonomous Enterprise Economy Command Center 2.0';
    }

    public function index()
    {
        return view('dashboard.autonomous_economy', $this->data);
    }
}
