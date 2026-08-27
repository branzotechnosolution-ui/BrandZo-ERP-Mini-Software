<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAutonomousExecutiveController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Autonomous Executive Suite 2.0 (COO, CFO, CMO, CTO)';
    }

    public function index()
    {
        return view('executive.suite', $this->data);
    }
}
