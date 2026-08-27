<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCustomerExperienceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Customer Experience & Support Intelligence OS Command Center';
    }

    public function index()
    {
        return view('customer_experience/command_center', $this->data);
    }
}
