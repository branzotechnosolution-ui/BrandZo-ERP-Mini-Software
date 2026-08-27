<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoGlobalWarRoomController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Enterprise Strategic War Room 2.0';
    }

    public function index()
    {
        return view('strategy.global_war_room', $this->data);
    }
}
