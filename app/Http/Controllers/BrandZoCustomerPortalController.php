<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCustomerPortalController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Customer Portal & SaaS Marketplace Dashboard';
    }

    public function index()
    {
        return view('customer_portal.dashboard', $this->data);
    }
}
