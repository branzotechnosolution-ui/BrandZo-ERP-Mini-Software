<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoIntegrationController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Integration Marketplace & API Ecosystem Command Center';
    }

    public function index()
    {
        return view('integration_hub.command_center', $this->data);
    }
}
