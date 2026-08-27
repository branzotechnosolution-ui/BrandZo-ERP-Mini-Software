<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoEnterpriseBuilderController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Autonomous Enterprise Builder & Studio';
    }

    public function index()
    {
        return view('builder.studio', $this->data);
    }
}
