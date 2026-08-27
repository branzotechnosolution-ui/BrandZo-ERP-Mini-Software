<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCollaborationController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise Collaboration Universe OS Command Center';
    }

    public function index()
    {
        return view('collaboration.universe_center', $this->data);
    }
}
