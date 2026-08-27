<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoPartnershipHubController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Global Partnership Hub';
    }

    public function index()
    {
        return view('partnership.hub', $this->data);
    }
}
