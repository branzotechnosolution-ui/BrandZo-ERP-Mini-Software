<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoDataIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Enterprise Data Warehouse & Data Lake Intelligence OS Command Center';
    }

    public function index()
    {
        return view('data_intelligence.command_center', $this->data);
    }
}
