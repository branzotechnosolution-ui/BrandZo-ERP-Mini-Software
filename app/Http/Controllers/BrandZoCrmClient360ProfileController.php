<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCrmClient360ProfileController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Unified Client 360 Profile Suite';
    }

    public function index()
    {
        return view('crm_client_360.index', $this->data);
    }
}
