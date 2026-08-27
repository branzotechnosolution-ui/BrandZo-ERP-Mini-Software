<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCfoIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI CFO & Financial Intelligence OS Command Center';
    }

    public function index()
    {
        return view('cfo_intelligence.command_center', $this->data);
    }
}
