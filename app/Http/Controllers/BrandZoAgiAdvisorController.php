<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAgiAdvisorController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AGI Business Advisor Assistant';
    }

    public function index()
    {
        return view('agi.advisor', $this->data);
    }
}
