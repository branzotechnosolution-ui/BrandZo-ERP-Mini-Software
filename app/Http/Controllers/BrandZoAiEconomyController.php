<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiEconomyController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Business Economy & Autonomous Revenue OS Command Center';
    }

    public function index()
    {
        return view('economy.ai_business_center', $this->data);
    }
}
