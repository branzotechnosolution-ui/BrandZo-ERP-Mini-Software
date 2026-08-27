<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoSupportMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Customer Support Marketplace & Service Intelligence Command Center';
    }

    public function index()
    {
        return view('support_intelligence.command_center', $this->data);
    }
}
