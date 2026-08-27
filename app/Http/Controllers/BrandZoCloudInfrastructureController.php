<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCloudInfrastructureController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Global Cloud Infrastructure & Enterprise Scale Command Center';
    }

    public function index()
    {
        return view('cloud_infrastructure.command_center', $this->data);
    }
}
