<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCertificationController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Partner Certification Program';
    }

    public function index()
    {
        return view('certification.index', $this->data);
    }
}
