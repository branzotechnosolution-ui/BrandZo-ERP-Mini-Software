<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoProductionMonitoringController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Production Monitoring & Observability';
    }

    public function index()
    {
        return view('monitoring.production', $this->data);
    }
}
