<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGlobalRevenueController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Enterprise Revenue Command Center';
    }

    public function index()
    {
        return view('dashboard.global_revenue', $this->data);
    }
}
