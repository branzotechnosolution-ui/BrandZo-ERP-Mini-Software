<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoDataLakeController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise Data Lake & Real-Time Analytics Fabric';
    }

    public function index()
    {
        return view('datalake.dashboard', $this->data);
    }
}
