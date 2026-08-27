<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiDigitalEmployeeController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'AI Digital Employee Workforce Platform';
    }

    public function roster()
    {
        return view('ai_workforce.index', $this->data);
    }

    public function governance()
    {
        return view('ai_workforce.governance', $this->data);
    }
}
