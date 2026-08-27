<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoVoiceAssistantController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Voice AI Executive Assistant';
    }

    public function index()
    {
        return view('ai.voice_assistant', $this->data);
    }
}
