<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoProductionCommercializationController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Production Deployment & Commercialization Center';
    }

    public function index()
    {
        return view('production.commercialization_center', $this->data);
    }
}
