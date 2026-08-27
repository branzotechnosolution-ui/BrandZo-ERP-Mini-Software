<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoBusinessAdvisorController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Autonomous AI Business Advisor Network';
    }

    public function index()
    {
        return view('advisor.network', $this->data);
    }
}
