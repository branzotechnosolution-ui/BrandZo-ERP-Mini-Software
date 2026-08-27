<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoKnowledgeBrainController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Knowledge Brain OS Command Center';
    }

    public function index()
    {
        return view('knowledge.brain_center', $this->data);
    }
}
