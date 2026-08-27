<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAgiInnovationController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AGI Innovation & Discovery Laboratory';
    }

    public function index()
    {
        return view('agi.innovation_lab', $this->data);
    }
}
