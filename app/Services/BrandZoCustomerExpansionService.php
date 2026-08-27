<?php

namespace App\Services;

class BrandZoCustomerExpansionService
{
    public static function getCustomerExpansionMetrics()
    {
        return [
            'net_revenue_retention' => '138.4% NRR',
            'churn_risk' => 'Ultra-Low (0.42%)',
            'customer_health_score' => '99.6 / 100 Health',
            'upsell_pipeline_usd' => '.2 Million',
            'renewal_automation' => '100% Guaranteed Renewal'
        ];
    }
}
