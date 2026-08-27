<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGlobalSalesMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Enterprise Sales Marketplace 3.0';
    }

    public function index()
    {
        return view('marketplace.sales', $this->data);
    }
}
