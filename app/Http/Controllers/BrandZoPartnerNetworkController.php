<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoPartnerNetworkController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Partner & Reseller Network 3.0';
    }

    public function index()
    {
        return view('partners.network', $this->data);
    }
}
