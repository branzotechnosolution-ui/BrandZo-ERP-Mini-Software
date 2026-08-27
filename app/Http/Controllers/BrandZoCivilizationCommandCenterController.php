<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCivilizationCommandCenterController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Universal Civilization Command Center';
    }

    public function index()
    {
        return view('dashboard.civilization_command', $this->data);
    }
}
