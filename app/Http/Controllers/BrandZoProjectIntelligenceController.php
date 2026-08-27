<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoProjectIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Project Management & Execution Intelligence OS Command Center';
    }

    public function index()
    {
        return view('project_intelligence.command_center', $this->data);
    }
}
