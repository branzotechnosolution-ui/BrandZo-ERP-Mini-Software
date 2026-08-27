<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCommunityAcademyController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Customer Community & Certification Academy';
    }

    public function index()
    {
        return view('community.academy', $this->data);
    }
}
