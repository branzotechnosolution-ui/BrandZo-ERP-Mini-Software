<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoPlanetaryCommandController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Planetary AI Command Center';
    }

    public function index()
    {
        return view('dashboard.planetary_command', $this->data);
    }
}
