<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoEnterpriseNetworkMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Enterprise Network Marketplace';
    }

    public function index()
    {
        return view('network.marketplace', $this->data);
    }
}
