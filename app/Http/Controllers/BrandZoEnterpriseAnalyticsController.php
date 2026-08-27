<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoEnterpriseAnalyticsController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise Intelligence Analytics OS';
    }

    public function index()
    {
        return view('analytics.os', $this->data);
    }
}
