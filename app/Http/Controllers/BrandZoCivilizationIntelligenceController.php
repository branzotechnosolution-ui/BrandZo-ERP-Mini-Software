<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCivilizationIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Autonomous Enterprise Civilization OS 2.0';
    }

    public function index()
    {
        return view('dashboard.civilization_intelligence', $this->data);
    }
}
