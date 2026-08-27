<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoApiPlatformController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise API Management Platform';
    }

    public function index()
    {
        return view('api.platform_dashboard', $this->data);
    }
}
