<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoBusinessFactoryV2Controller extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Autonomous Business Factory 2.0';
    }

    public function index()
    {
        return view('factory.v2', $this->data);
    }
}
