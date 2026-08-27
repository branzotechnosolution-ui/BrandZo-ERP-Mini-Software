<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoPremiumSupportController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Premium Enterprise Support SLA Desk';
    }

    public function index()
    {
        return view('support.premium', $this->data);
    }
}
