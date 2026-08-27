<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGlobalCfoController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI CFO Global Financial Command Center';
    }

    public function index()
    {
        return view('cfo.global_command', $this->data);
    }
}
