<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoSaasAdminController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo AI Enterprise OS SaaS Admin & Commercial Launch Command Center';
    }

    public function index()
    {
        return view('saas.admin_command_center', $this->data);
    }
}
