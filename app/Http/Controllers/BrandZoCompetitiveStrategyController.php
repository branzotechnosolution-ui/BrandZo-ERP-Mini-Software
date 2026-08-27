<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCompetitiveStrategyController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Competitive Strategy & Positioning Center';
    }

    public function index()
    {
        return view('strategy.competitive_center', $this->data);
    }
}
