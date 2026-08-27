<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCrmLeadRoutingController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Automated Lead Routing & Assignment Engine';
    }

    public function index()
    {
        return view('crm_routing.index', $this->data);
    }
}
