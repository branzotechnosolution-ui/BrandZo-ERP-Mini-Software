<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoProductionScaleController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Production Scale & Infrastructure Command';
    }

    public function index()
    {
        return view('production.scale', $this->data);
    }
}
