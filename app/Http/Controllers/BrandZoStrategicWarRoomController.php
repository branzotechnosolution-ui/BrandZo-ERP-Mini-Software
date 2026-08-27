<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoStrategicWarRoomController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Strategic War Room';
    }

    public function index()
    {
        return view('strategy.war_room', $this->data);
    }
}
