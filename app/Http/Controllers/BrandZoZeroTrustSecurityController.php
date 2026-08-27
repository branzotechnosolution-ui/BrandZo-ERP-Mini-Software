<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoZeroTrustSecurityController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Identity & Zero Trust Security OS';
    }

    public function index()
    {
        return view('security.zerotrust', $this->data);
    }
}
