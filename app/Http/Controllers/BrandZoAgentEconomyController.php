<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAgentEconomyController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Agent Economy 2.0';
    }

    public function index()
    {
        return view('agents.economy', $this->data);
    }
}
