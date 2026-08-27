<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCrmAiLeadScoringController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo AI Lead Scoring & Intent Intelligence Engine';
    }

    public function index()
    {
        return view('crm_ai_scoring/index', $this->data);
    }
}
