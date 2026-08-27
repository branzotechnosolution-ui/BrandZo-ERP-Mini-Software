<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoDeveloperMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Developer Partner Ecosystem 2.0';
    }

    public function index()
    {
        return view('developer.marketplace', $this->data);
    }
}
