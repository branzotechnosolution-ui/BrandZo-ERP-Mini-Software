<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoUniversalInnovationController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Universal AGI Innovation Hub';
    }

    public function index()
    {
        return view('innovation.universal_hub', $this->data);
    }
}
