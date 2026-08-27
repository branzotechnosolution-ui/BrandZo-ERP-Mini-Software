<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoFinancialCivilizationController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Financial Civilization & Wealth Intelligence Dashboard';
    }

    public function index()
    {
        return view('dashboard.financial_civilization', $this->data);
    }
}
