<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoHrIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI HR Executive Intelligence OS Command Center';
    }

    public function index()
    {
        return view('hr_intelligence.command_center', $this->data);
    }
}
