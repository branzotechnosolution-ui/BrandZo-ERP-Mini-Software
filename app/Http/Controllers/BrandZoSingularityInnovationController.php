<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoSingularityInnovationController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Universal Innovation Singularity Hub';
    }

    public function index()
    {
        return view('innovation.singularity_hub', $this->data);
    }
}
