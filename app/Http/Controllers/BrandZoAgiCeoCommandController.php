<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAgiCeoCommandController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AGI CEO Command Interface';
    }

    public function index()
    {
        return view('agi.ceo_command', $this->data);
    }
}
