<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiCommerceExchangeController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global AI Commerce Exchange';
    }

    public function index()
    {
        return view('marketplace.commerce', $this->data);
    }
}
