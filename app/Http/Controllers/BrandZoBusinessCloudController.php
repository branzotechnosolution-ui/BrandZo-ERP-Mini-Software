<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoBusinessCloudController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Business Cloud Platform';
    }

    public function index()
    {
        return view('cloud.dashboard', $this->data);
    }
}
