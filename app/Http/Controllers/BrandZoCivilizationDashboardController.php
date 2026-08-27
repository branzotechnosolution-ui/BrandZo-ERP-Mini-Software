<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCivilizationDashboardController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Enterprise Civilization Dashboard';
    }

    public function index()
    {
        return view('dashboard.civilization', $this->data);
    }
}
