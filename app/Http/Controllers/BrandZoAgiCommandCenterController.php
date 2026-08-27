<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAgiCommandCenterController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AGI Enterprise Command Center';
    }

    public function index()
    {
        return view('dashboard.agi_command_center', $this->data);
    }
}
