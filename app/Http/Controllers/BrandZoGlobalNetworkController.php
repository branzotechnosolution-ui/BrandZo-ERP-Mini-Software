<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGlobalNetworkController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Universal Enterprise Network & Ecosystem Dashboard';
    }

    public function index()
    {
        return view('dashboard.global_network', $this->data);
    }
}
