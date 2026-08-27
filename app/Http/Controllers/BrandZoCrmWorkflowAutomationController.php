<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCrmWorkflowAutomationController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Workflow Trigger & Action Automation Engine';
    }

    public function index()
    {
        return view('crm_workflows/index', $this->data);
    }
}
