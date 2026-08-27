<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoMergerAcquisitionController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Autonomous M&A Intelligence Engine & Deal Console';
    }

    public function index()
    {
        return view('ma.intelligence', $this->data);
    }
}
