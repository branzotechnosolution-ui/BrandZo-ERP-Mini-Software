<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCompanyBuilderController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Autonomous Company Builder OS Command Center';
    }

    public function index()
    {
        return view('company.builder_center', $this->data);
    }
}
