<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoMobileSuperAppController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise Mobile Super App Command';
    }

    public function index()
    {
        return view('mobile.superapp', $this->data);
    }
}
