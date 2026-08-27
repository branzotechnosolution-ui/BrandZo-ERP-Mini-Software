<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoUniversalMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Universal Enterprise Service Marketplace 3.0';
    }

    public function index()
    {
        return view('marketplace.universal', $this->data);
    }
}
