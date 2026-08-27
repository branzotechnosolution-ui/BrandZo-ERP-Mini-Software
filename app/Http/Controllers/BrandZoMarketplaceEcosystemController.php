<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoMarketplaceEcosystemController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global SaaS Marketplace 3.0 & Business Ecosystem Command Center';
    }

    public function index()
    {
        return view('marketplace.ecosystem_center', $this->data);
    }
}
