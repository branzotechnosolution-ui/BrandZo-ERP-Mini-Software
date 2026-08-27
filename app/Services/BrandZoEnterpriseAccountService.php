<?php

namespace App\Services;

class BrandZoEnterpriseAccountService
{
    public static function getEnterpriseAccountMetrics()
    {
        return [
            'enterprise_accounts' => 384,
            'avg_account_arr_usd' => ',500',
            'health_score_avg' => '99.6 / 100',
            'churn_rate' => '0.42%'
        ];
    }
}
