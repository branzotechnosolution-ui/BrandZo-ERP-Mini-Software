<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGlobalOsController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Global Operating System 77.0 Master';
    }

    public function index()
    {
        return view('dashboard.global_os', $this->data);
    }
}
