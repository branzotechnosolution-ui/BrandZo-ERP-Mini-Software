<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoPartnerEcosystemController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Enterprise Partner & Alliance Ecosystem OS Command Center';
    }

    public function index()
    {
        return view('partner_ecosystem.command_center', $this->data);
    }
}
