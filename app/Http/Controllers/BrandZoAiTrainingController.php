<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiTrainingController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Agent Training Studio';
    }

    public function index()
    {
        return view('ai_training.studio', $this->data);
    }
}
