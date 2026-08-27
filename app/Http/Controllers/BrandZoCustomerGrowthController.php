<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCustomerGrowthController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise Customer Growth & Monetization OS Command Center';
    }

    public function index()
    {
        return view('customer.growth_center', $this->data);
    }
}
