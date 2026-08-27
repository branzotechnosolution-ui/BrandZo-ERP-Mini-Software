<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCloudCommandController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise Cloud Command Center';
    }

    public function index()
    {
        return view('cloud.command_center', $this->data);
    }
}
