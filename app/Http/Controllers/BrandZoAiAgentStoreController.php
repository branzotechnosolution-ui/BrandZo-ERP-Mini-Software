<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandZoAiAgentStoreController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Agent Marketplace';
    }

    public function index()
    {
        $this->agents = [
            ['id' => 1, 'name' => 'AI Sales Agent', 'role' => 'Lead Qualification & Follow-up', 'status' => 'Active', 'actions' => 1420],
            ['id' => 2, 'name' => 'AI HR Assistant', 'role' => 'Leave & Attendance Manager', 'status' => 'Active', 'actions' => 980],
            ['id' => 3, 'name' => 'AI Finance Analyst', 'role' => 'Revenue & Overdue Auditor', 'status' => 'Active', 'actions' => 610],
            ['id' => 4, 'name' => 'AI Support Agent', 'role' => 'Auto-Ticket Dispatcher', 'status' => 'Active', 'actions' => 430],
            ['id' => 5, 'name' => 'AI Marketing Agent', 'role' => 'Campaign & WhatsApp Automation', 'status' => 'Active', 'actions' => 1120],
            ['id' => 6, 'name' => 'AI Business Analyst', 'role' => 'Executive Insights Generator', 'status' => 'Active', 'actions' => 850],
        ];

        return view('ai_store.index', $this->data);
    }
}
