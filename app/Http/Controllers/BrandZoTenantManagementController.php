<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoTenantManagementController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Tenant Management Console';
    }

    public function index()
    {
        return view('tenant.management', $this->data);
    }
}
