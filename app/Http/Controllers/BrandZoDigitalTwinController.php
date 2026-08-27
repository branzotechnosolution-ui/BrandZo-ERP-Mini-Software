<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoDigitalTwinController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Digital Twin Enterprise Simulation Universe Command Center';
    }

    public function index()
    {
        return view('digital_twin.universe_center', $this->data);
    }
}
