<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoDeveloperEcosystemController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Developer Ecosystem & SDK Marketplace Analytics Dashboard';
    }

    public function index()
    {
        return view('developer_ecosystem.analytics_dashboard', $this->data);
    }
}
