<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAutomationCommandController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Autonomous Enterprise Automation Marketplace 2.0 Command Center';
    }

    public function index()
    {
        return view('automation.command_center', $this->data);
    }
}
