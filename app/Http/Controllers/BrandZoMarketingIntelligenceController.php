<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoMarketingIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Marketing Intelligence & Growth Automation OS Command Center';
    }

    public function index()
    {
        return view('marketing_intelligence.command_center', $this->data);
    }
}
