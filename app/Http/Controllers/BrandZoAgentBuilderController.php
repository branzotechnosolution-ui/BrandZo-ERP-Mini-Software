<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAgentBuilderController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'No-Code AI Agent Builder Studio';
    }

    public function index()
    {
        return view('agents.builder', $this->data);
    }
}
