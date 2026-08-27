<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCeoIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI CEO Executive Decision Intelligence OS Command Center';
    }

    public function index()
    {
        return view('ceo_intelligence.command_center', $this->data);
    }
}
