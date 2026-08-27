<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAutonomousAcquisitionController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Autonomous Customer Acquisition Network';
    }

    public function index()
    {
        return view('acquisition.network', $this->data);
    }
}
