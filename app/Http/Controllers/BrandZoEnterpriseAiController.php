<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoEnterpriseAiController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo AI Enterprise Operating System Final Integration Command Center';
    }

    public function index()
    {
        return view('enterprise_ai.command_center', $this->data);
    }
}
