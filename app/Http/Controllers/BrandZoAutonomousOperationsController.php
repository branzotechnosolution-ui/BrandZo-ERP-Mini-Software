<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAutonomousOperationsController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Autonomous Business Operations OS Command Center';
    }

    public function index()
    {
        return view('autonomous_operations.command_center', $this->data);
    }
}
