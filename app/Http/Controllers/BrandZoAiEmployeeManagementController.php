<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiEmployeeManagementController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Employee Management Center 2.0';
    }

    public function index()
    {
        return view('ai_employee.management', $this->data);
    }
}
