<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoPlatformEcosystemController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise Marketplace & Platform Ecosystem Command Center';
    }

    public function index()
    {
        return view('platform.ecosystem_center', $this->data);
    }
}
