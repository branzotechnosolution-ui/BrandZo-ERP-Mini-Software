<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoKnowledgeMarketplaceController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Enterprise AI Knowledge Marketplace';
    }

    public function index()
    {
        return view('marketplace.knowledge', $this->data);
    }
}
