<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCrmLeadImportController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Bulk Lead Import Engine & Column Mapper';
    }

    public function index()
    {
        return view('crm_lead_import.index', $this->data);
    }
}
