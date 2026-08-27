<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoSingularityDashboardController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AGI Enterprise Singularity Dashboard';
    }

    public function index()
    {
        return view('dashboard.singularity', $this->data);
    }
}
