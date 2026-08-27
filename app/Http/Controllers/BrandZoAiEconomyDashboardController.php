<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiEconomyDashboardController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise AI Operating Economy Dashboard';
    }

    public function index()
    {
        return view('dashboard.ai_economy_cloud', $this->data);
    }
}
