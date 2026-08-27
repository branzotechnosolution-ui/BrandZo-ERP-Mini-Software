<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiCommandCenterController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise AI Command Center';
    }

    public function index()
    {
        return view('ai_command_center.index', $this->data);
    }
}
