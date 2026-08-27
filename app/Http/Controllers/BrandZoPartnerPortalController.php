<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoPartnerPortalController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Partner & Reseller Network Command Portal';
    }

    public function index()
    {
        return view('partner_portal.dashboard', $this->data);
    }
}
