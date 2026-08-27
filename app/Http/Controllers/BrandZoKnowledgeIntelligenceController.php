<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoKnowledgeIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Knowledge Management & Enterprise Learning Intelligence OS Command Center';
    }

    public function index()
    {
        return view('knowledge_intelligence.command_center', $this->data);
    }
}
