<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiCeoTwinController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI CEO Digital Twin';
    }

    public function index()
    {
        return view('ai.ceo_twin', $this->data);
    }
}
