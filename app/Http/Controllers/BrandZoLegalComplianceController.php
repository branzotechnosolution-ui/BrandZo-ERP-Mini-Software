<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoLegalComplianceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Legal & Compliance Intelligence OS Command Center';
    }

    public function index()
    {
        return view('legal_compliance.command_center', $this->data);
    }
}
