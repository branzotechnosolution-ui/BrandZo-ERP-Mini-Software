<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BrandZoCustomer360Controller extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Customer 360 Intelligence Portal';
    }

    public function index()
    {
        $companyId = company() ? company()->id : 1;
        $this->customers = User::where('company_id', $companyId)
            ->whereHas('roles', function ($query) {
                $query->where('name', 'client');
            })
            ->limit(10)
            ->get();

        return view('customer_360.index', $this->data);
    }
}
