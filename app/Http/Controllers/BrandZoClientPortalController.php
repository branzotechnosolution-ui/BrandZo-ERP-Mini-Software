<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoClientPortalController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise Client & Customer Portal';
    }

    public function index()
    {
        return view('client.portal', $this->data);
    }
}
