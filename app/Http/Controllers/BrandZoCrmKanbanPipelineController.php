<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoCrmKanbanPipelineController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'BrandZo Interactive CRM Kanban Pipeline Board';
    }

    public function index()
    {
        return view('crm_kanban.index', $this->data);
    }
}
