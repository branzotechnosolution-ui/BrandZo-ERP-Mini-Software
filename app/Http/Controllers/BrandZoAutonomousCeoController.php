<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAutonomousCeoController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Autonomous CEO Operating Console 3.0';
    }

    public function index()
    {
        return view('ceo.autonomous_console', $this->data);
    }
}
