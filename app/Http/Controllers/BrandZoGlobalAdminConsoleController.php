<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGlobalAdminConsoleController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Enterprise Cloud Admin Console';
    }

    public function index()
    {
        return view('admin.global_console', $this->data);
    }
}
