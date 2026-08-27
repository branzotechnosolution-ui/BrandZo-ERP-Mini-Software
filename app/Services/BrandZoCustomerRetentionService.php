<?php

namespace App\Services;

use App\Models\Company;

class BrandZoCustomerRetentionService
{
    public static function predictCustomerChurn($companyId = 1)
    {
        $company = Company::find($companyId);
        if (!$company) return null;

        $daysRemaining = $company->licence_expire_on ? now()->diffInDays($company->licence_expire_on, false) : 30;
        $healthScore = ($daysRemaining > 10) ? 95 : 45;
        $churnRisk = ($daysRemaining <= 7) ? 'High Risk' : 'Low Risk';

        return [
            'company_id' => $companyId,
            'company_name' => $company->company_name,
            'health_score' => $healthScore,
            'churn_risk' => $churnRisk,
            'days_remaining' => max(0, $daysRemaining),
            'recommended_action' => ($daysRemaining <= 7) ? 'Trigger Automated Renewal WhatsApp Offer' : 'Account Healthy'
        ];
    }
}
