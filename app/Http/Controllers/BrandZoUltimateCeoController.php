<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoUltimateCeoController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Autonomous CEO Ultimate Console';
    }

    public function index()
    {
        return view('ceo.ultimate_console', $this->data);
    }
}
