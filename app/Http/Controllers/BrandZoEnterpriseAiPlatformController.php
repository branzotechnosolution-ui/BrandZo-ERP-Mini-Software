<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoEnterpriseAiPlatformController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise AI Operating System 2.0 Command Center';
    }

    public function index()
    {
        return view('ai_platform.command_center', $this->data);
    }
}
