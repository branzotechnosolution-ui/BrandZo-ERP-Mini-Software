<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoEnterpriseMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Enterprise Marketplace & Industry Solution Packs';
    }

    public function index()
    {
        return view('marketplace.enterprise', $this->data);
    }
}
