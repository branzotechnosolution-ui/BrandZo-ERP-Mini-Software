<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoManufacturingIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Manufacturing Intelligence OS Command Center';
    }

    public function index()
    {
        return view('manufacturing_intelligence.command_center', $this->data);
    }
}
