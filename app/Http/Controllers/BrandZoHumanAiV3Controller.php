<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoHumanAiV3Controller extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI + Human Workforce Collaboration 3.0';
    }

    public function index()
    {
        return view('collaboration.v3', $this->data);
    }
}
