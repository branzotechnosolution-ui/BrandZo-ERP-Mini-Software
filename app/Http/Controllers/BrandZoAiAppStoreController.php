<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiAppStoreController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Global AI App Store & Developer Portal';
    }

    public function index()
    {
        return view('appstore.index', $this->data);
    }
}
