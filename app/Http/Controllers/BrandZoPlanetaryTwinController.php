<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoPlanetaryTwinController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Planetary Digital Twin Simulation Engine';
    }

    public function index()
    {
        return view('planetary.digital_twin', $this->data);
    }
}
