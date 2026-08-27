<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoBusinessMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Business Marketplace';
    }

    public function index()
    {
        return view('business_marketplace.index', $this->data);
    }
}
