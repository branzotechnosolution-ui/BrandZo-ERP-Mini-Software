<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoTeamCollaborationController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Advanced Team Collaboration Workspace';
    }

    public function index()
    {
        return view('collaboration.workspace', $this->data);
    }
}
