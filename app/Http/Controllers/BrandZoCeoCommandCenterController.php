<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCeoCommandCenterController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo AI Enterprise OS Ultimate Edition Final CEO Command Center';
    }

    public function index()
    {
        return view('ceo_command_center.dashboard', $this->data);
    }
}
