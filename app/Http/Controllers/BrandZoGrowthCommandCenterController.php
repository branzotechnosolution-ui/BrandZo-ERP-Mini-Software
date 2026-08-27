<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGrowthCommandCenterController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Customer Acquisition & Growth Command Center';
    }

    public function index()
    {
        return view('growth.command_center', $this->data);
    }
}
