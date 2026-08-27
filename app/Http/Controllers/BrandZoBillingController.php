<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoBillingController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'SaaS Subscription & Billing Dashboard';
    }

    public function index()
    {
        return view('billing.index', $this->data);
    }
}
