<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCustomerAcquisitionController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Customer Acquisition & Growth Intelligence Dashboard';
    }

    public function index()
    {
        return view('customer_acquisition.dashboard', $this->data);
    }
}
