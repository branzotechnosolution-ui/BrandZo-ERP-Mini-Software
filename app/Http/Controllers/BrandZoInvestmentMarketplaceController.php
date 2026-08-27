<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoInvestmentMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Enterprise Investment & Venture Marketplace';
    }

    public function index()
    {
        return view('marketplace.investments', $this->data);
    }
}
