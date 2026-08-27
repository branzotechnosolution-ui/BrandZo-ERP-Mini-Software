<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoExpansionStrategyController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Autonomous Business Expansion Engine';
    }

    public function index()
    {
        return view('expansion.strategy', $this->data);
    }
}
