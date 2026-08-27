<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGlobalCivilizationGrowthController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Civilization Growth & Enterprise Singularity Dashboard 3.0';
    }

    public function index()
    {
        return view('dashboard.global_civilization_growth', $this->data);
    }
}
