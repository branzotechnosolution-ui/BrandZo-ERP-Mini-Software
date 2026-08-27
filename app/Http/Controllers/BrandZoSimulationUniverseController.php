<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoSimulationUniverseController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Enterprise Simulation Universe';
    }

    public function index()
    {
        return view('simulation.universe', $this->data);
    }
}
