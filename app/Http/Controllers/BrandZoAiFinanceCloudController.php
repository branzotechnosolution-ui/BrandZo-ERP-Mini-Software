<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiFinanceCloudController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise AI Finance & CFO Automation Cloud';
    }

    public function index()
    {
        return view('finance.cloud', $this->data);
    }
}
