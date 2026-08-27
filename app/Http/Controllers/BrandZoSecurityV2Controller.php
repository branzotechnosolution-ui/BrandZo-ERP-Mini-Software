<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoSecurityV2Controller extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise Security & Compliance 2.0 SOC';
    }

    public function index()
    {
        return view('security.soc', $this->data);
    }
}
