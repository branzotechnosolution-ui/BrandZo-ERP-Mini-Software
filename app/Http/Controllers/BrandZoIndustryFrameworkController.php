<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoIndustryFrameworkController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Industry Solution Framework';
    }

    public function packages()
    {
        return view('industry.index', $this->data);
    }

    public function templates()
    {
        return view('industry.templates', $this->data);
    }
}
