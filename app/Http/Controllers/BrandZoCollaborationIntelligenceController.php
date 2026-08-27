<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCollaborationIntelligenceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Enterprise Collaboration & Communication Intelligence OS Command Center';
    }

    public function index()
    {
        return view('collaboration_intelligence.command_center', $this->data);
    }
}
