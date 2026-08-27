<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoUniversalCommandCenterController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Universal AGI Enterprise Command Center';
    }

    public function index()
    {
        return view('dashboard.universal_command', $this->data);
    }
}
