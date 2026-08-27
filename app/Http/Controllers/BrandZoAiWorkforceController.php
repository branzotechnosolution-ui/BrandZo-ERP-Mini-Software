<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiWorkforceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global AI Workforce Operating Layer 6.0 Command Center';
    }

    public function index()
    {
        return view('workforce.command_center', $this->data);
    }
}
