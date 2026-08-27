<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCustomerSuccessController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Customer Success & Retention Intelligence Command Center';
    }

    public function index()
    {
        return view('customer_success.command_center', $this->data);
    }
}
