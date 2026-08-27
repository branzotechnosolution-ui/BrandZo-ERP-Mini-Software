<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoUatDashboardController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo User Acceptance Testing & Real Workflow Validation Dashboard';
    }

    public function index()
    {
        return view('uat_dashboard.index', $this->data);
    }
}
