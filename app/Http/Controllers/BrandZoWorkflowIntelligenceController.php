<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoWorkflowIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Workflow Orchestration & Business Process Automation Intelligence OS Command Center';
    }

    public function index()
    {
        return view('workflow_intelligence.command_center', $this->data);
    }
}
