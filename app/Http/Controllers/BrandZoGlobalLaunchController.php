<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGlobalLaunchController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo AI Enterprise OS - Final CEO Global Launch & Growth Command Center';
    }

    public function index()
    {
        return view('global_launch.command_center', $this->data);
    }
}
