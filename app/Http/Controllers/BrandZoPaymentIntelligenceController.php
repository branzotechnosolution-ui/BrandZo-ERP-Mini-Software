<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoPaymentIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Payment & Digital Finance Intelligence OS Command Center';
    }

    public function index()
    {
        return view('payment_intelligence.command_center', $this->data);
    }
}
