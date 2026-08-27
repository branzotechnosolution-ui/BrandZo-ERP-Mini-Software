<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCrmSlaEscalationController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo SLA Escalation & Smart Sales Monitoring Engine';
    }

    public function index()
    {
        return view('crm_sla/index', $this->data);
    }
}
