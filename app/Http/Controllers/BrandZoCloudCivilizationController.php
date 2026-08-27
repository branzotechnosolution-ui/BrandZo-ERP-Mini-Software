<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCloudCivilizationController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Autonomous Cloud Federation & Infrastructure Mesh Dashboard';
    }

    public function index()
    {
        return view('dashboard.cloud_civilization', $this->data);
    }
}
