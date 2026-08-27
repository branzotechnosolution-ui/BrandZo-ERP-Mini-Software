<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoSingularityController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Global Business Singularity OS Command Center';
    }

    public function index()
    {
        return view('singularity.command_center', $this->data);
    }
}
