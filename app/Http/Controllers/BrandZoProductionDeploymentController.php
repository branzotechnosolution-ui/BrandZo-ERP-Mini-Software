<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoProductionDeploymentController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Production Deployment Preparation Dashboard';
    }

    public function index()
    {
        return view('production_deployment.checklist', $this->data);
    }
}
