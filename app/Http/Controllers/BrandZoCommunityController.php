<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCommunityController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global Customer Community Forum';
    }

    public function index()
    {
        return view('community.forum', $this->data);
    }
}
