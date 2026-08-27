<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoInnovationLabController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Innovation Lab';
    }

    public function index()
    {
        return view('innovation.lab', $this->data);
    }
}
