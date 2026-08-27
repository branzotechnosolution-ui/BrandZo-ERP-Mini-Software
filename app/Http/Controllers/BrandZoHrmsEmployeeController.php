<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoHrmsEmployeeController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Enterprise HRMS - Employee Management Core';
    }

    public function index()
    {
        return view('hrms_employee/index', $this->data);
    }
}
