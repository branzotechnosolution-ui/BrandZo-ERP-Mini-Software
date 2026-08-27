<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoSecurityAuditController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Final Security Audit & Production Readiness Dashboard';
    }

    public function index()
    {
        return view('security_audit.dashboard', $this->data);
    }
}
