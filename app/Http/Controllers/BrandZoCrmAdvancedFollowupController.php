<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCrmAdvancedFollowupController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Advanced Follow-up System & Calendar Matrix';
    }

    public function index()
    {
        return view('crm_followups.index', $this->data);
    }
}
