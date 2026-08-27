<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\RegisterController;
use App\Models\GlobalSetting;
use App\Models\Company;

class CompanyRegisterController extends RegisterController
{
    public function index()
    {
        if (auth()->check()) {
            return redirect(route('dashboard'));
        }

        $globalSetting = GlobalSetting::first();
        $company = Company::first();

        if ($company && !$company->allow_client_signup) {
            return redirect(route('login'));
        }

        return view('auth.register', [
            'globalSetting' => $globalSetting,
            'global' => $globalSetting,
            'company' => $company,
        ]);
    }
}
