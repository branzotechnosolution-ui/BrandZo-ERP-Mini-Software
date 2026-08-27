<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoSalesCopilotController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Sales Team Copilot & Deal Closing Intelligence Command Center';
    }

    public function index()
    {
        return view('sales_copilot.command_center', $this->data);
    }
}
