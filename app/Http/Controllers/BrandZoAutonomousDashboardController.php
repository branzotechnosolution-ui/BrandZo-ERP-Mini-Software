<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAutonomousDashboardController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Autonomous Enterprise Dashboard';
    }

    public function index()
    {
        return view('dashboard.autonomous_enterprise', $this->data);
    }
}
