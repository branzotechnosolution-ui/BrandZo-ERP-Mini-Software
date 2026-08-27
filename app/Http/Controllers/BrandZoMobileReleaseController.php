<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoMobileReleaseController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Mobile App Store Production Launch Command Center';
    }

    public function index()
    {
        return view('mobile_release.command_center', $this->data);
    }
}
