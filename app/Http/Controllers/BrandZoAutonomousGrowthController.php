<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAutonomousGrowthController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Growth & Revenue OS Command Center';
    }

    public function index()
    {
        return view('autonomous_growth.command_center', $this->data);
    }
}
