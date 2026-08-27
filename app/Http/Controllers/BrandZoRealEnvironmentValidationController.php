<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoRealEnvironmentValidationController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Real Local Environment Validation Dashboard';
    }

    public function index()
    {
        return view('real_environment.dashboard', $this->data);
    }
}
