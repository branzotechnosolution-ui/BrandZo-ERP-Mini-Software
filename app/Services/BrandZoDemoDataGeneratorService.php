<?php

namespace App\Services;

use App\Models\Company;
use App\Models\User;
use App\Models\Lead;
use App\Models\Invoice;

class BrandZoDemoDataGeneratorService
{
    public static function createTrialAccount($companyName, $adminEmail, $adminName)
    {
        $company = Company::create([
            'company_name' => $companyName,
            'company_email' => $adminEmail,
            'licence_expire_on' => now()->addDays(14),
            'status' => 'active'
        ]);

        return [
            'company_id' => $company->id,
            'company_name' => $company->company_name,
            'trial_expires_at' => $company->licence_expire_on->toDateTimeString(),
            'status' => '14-Day Free Trial Activated'
        ];
    }
}
