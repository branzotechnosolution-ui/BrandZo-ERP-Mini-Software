<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoSecurityDashboardController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise Security Dashboard';
    }

    public function index()
    {
        return view('security.dashboard', $this->data);
    }
}
