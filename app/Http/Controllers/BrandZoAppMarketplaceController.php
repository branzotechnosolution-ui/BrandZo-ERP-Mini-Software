<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAppMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Enterprise App Marketplace 2.0';
    }

    public function index()
    {
        return view('marketplace.store', $this->data);
    }
}
