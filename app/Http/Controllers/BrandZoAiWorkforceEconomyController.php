<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiWorkforceEconomyController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Workforce Marketplace 3.0';
    }

    public function index()
    {
        return view('marketplace.workforce', $this->data);
    }
}
