<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoDeveloperController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Developer Portal & API Console';
    }

    public function index()
    {
        return view('developer.portal', $this->data);
    }
}
