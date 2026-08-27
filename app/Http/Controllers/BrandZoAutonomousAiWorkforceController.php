<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAutonomousAiWorkforceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Autonomous Enterprise AI Workforce 3.0 Command Center';
    }

    public function index()
    {
        return view('ai_workforce.command_center', $this->data);
    }
}
