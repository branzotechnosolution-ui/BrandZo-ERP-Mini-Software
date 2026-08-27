<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoExpansionCommandCenterController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise Growth Marketplace & Expansion Command Center';
    }

    public function index()
    {
        return view('growth.expansion_center', $this->data);
    }
}
