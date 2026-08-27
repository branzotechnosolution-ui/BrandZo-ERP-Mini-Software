<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoEnterpriseOsController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Enterprise OS 100.0 Final Evolution Command Center';
    }

    public function index()
    {
        return view('dashboard.enterprise_os', $this->data);
    }
}
