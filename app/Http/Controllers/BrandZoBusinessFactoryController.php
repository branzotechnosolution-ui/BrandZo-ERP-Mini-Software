<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoBusinessFactoryController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Autonomous Business Factory';
    }

    public function index()
    {
        return view('factory.dashboard', $this->data);
    }
}
