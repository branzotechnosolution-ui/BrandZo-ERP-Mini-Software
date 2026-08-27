<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGlobalExpansionController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Global Expansion & Market Intelligence OS Command Center';
    }

    public function index()
    {
        return view('global_expansion.command_center', $this->data);
    }
}
