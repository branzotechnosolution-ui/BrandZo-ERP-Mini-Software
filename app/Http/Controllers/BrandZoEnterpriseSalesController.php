<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoEnterpriseSalesController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise Sales & Deal Intelligence Platform';
    }

    public function index()
    {
        return view('sales.enterprise', $this->data);
    }
}
