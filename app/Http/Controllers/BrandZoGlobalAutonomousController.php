<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGlobalAutonomousController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Autonomous Enterprise Command Center 2.0';
    }

    public function index()
    {
        return view('dashboard.global_autonomous', $this->data);
    }
}
