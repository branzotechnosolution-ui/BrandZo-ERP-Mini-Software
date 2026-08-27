<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAnalyticsCommandController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise Predictive Analytics & Business Intelligence OS';
    }

    public function index()
    {
        return view('analytics.intelligence_center', $this->data);
    }
}
