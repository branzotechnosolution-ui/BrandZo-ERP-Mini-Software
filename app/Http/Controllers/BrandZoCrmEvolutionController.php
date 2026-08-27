<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCrmEvolutionController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BranZo Techno Solution Enterprise CRM Evolution Dashboard';
    }

    public function index()
    {
        return view('crm_evolution.index', $this->data);
    }
}
