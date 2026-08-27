<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoLocalTestingController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Local Hosting & System Testing Dashboard';
    }

    public function index()
    {
        return view('local_testing.dashboard', $this->data);
    }
}
