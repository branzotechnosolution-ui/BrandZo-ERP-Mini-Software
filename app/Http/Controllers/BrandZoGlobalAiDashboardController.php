<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGlobalAiDashboardController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global AI Business Dashboard';
    }

    public function index()
    {
        return view('dashboard.global_ai', $this->data);
    }
}
