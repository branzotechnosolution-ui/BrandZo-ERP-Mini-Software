<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoBusinessAnalystMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Business Analyst Marketplace';
    }

    public function index()
    {
        return view('marketplace.analysts', $this->data);
    }
}
