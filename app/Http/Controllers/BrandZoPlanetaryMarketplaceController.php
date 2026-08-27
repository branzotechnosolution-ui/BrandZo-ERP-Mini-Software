<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoPlanetaryMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Enterprise Operating Marketplace 4.0';
    }

    public function index()
    {
        return view('planetary.marketplace', $this->data);
    }
}
