<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoOperationsCommandController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Autonomous Enterprise Operations Intelligence Command Center';
    }

    public function index()
    {
        return view('operations.command_center', $this->data);
    }
}
