<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiCeoNetworkController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI CEO Network & Executive Strategy Hub';
    }

    public function index()
    {
        return view('ceo.network_hub', $this->data);
    }
}
