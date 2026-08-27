<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGlobalEnterpriseController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Enterprise Admin Command Center';
    }

    public function index()
    {
        return view('enterprise.global_console', $this->data);
    }
}
