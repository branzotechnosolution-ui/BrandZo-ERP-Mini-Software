<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCrmAiSalesAssistantController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo AI Sales Assistant & Smart Drip Campaign Engine';
    }

    public function index()
    {
        return view('crm_ai_assistant/index', $this->data);
    }
}
