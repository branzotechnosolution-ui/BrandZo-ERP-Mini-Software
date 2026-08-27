<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiConsultantController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Business Consultant Platform';
    }

    public function index()
    {
        return view('ai.consultant', $this->data);
    }
}
