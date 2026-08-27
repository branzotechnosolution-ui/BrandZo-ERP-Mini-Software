<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoEducationPlatformController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Customer Education Academy';
    }

    public function index()
    {
        return view('education.academy', $this->data);
    }
}
