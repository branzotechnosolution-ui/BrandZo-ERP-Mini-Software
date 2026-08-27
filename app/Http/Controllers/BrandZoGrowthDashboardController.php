<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGrowthDashboardController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global SaaS Customer Growth Engine';
    }

    public function index()
    {
        return view('growth.dashboard', $this->data);
    }
}
