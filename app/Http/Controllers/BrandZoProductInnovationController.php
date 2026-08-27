<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoProductInnovationController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Product Innovation & R&D Intelligence OS Command Center';
    }

    public function index()
    {
        return view('product_innovation.command_center', $this->data);
    }
}
