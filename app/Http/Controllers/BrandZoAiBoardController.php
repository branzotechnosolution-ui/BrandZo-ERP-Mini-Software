<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiBoardController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Board of Directors System';
    }

    public function index()
    {
        return view('ai_board.index', $this->data);
    }
}
