<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoDevOpsIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI DevOps & Infrastructure Intelligence OS Command Center';
    }

    public function index()
    {
        return view('devops_intelligence.command_center', $this->data);
    }
}
