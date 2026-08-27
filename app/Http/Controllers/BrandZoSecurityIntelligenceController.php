<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoSecurityIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Cyber Security & Defense Intelligence OS Command Center';
    }

    public function index()
    {
        return view('security_intelligence.command_center', $this->data);
    }
}
