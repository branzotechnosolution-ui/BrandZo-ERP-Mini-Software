<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCommerceMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Global Commerce Marketplace OS Command Center';
    }

    public function index()
    {
        return view('commerce_marketplace.command_center', $this->data);
    }
}
