<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoMarketLaunchController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Market Launch & Customer Acquisition Command Center';
    }

    public function index()
    {
        return view('launch.command_center', $this->data);
    }
}
