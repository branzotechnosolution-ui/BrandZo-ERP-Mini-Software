<?php

namespace App\Services;

use App\Models\Company;
use App\Models\Team;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class BrandZoCompanySetupService
{
    public static function setupCompanyWorkspace()
    {
        $company = Company::firstOrCreate(
            ['company_name' => 'BrandZo Techno Solution'],
            ['company_email' => 'contact@brandzo.in', 'status' => 'active']
        );

        $departments = ['Engineering', 'Sales', 'HR', 'Finance'];
        foreach ($departments as $dept) {
            Team::firstOrCreate(
                ['team_name' => $dept, 'company_id' => $company->id]
            );
        }

        return [
            'company_id' => $company->id,
            'company_name' => $company->company_name,
            'departments' => $departments,
            'status' => 'Initialized'
        ];
    }
}
