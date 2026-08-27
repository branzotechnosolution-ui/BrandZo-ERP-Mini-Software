<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoMarketplace2Controller extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo App Marketplace 2.0';
    }

    public function index()
    {
        return view('marketplace.v2', $this->data);
    }
}
