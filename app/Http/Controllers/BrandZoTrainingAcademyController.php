<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoTrainingAcademyController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Training Academy & Certification Command Center';
    }

    public function index()
    {
        return view('training_intelligence.command_center', $this->data);
    }
}
