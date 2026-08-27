<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCrmSalesDashboardController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Executive Sales Command Dashboard';
    }

    public function index()
    {
        return view('crm_sales_dashboard.index', $this->data);
    }
}
