<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandZoReferralController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Referral & Affiliate Growth Program';
    }

    public function index()
    {
        $companyId = company() ? company()->id : 1;
        $this->partners = DB::table('partners')->where('company_id', $companyId)->get();

        return view('marketing.referral', $this->data);
    }
}
