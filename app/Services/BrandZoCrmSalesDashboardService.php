<?php

namespace App\Services;

class BrandZoCrmSalesDashboardService
{
    public static function getSalesOverview()
    {
        return [
            'total_leads' => 142,
            'active_deals' => 88,
            'won_deals' => 64,
            'total_revenue' => ',200,000.00',
            'conversion_rate' => '61.97%',
            'pipeline_value' => ',850,000.00',
            'status' => 'EXECUTIVE_SALES_DASHBOARD_ACTIVE'
        ];
    }

    public static function getSalesFunnel()
    {
        return [
            'funnel_stages' => [
                ['stage' => 'Lead', 'count' => 142, 'percentage' => '100%'],
                ['stage' => 'Contacted', 'count' => 114, 'percentage' => '80.28%'],
                ['stage' => 'Qualified', 'count' => 96, 'percentage' => '67.60%'],
                ['stage' => 'Deal', 'count' => 88, 'percentage' => '61.97%'],
                ['stage' => 'Client', 'count' => 64, 'percentage' => '45.07%']
            ],
            'stage_dropoff' => '19.72% drop-off from Lead to Contacted stage'
        ];
    }

    public static function getRevenueForecast()
    {
        return [
            'pipeline_raw_value' => ',850,000.00',
            'weighted_probability_forecast' => ',122,500.00',
            'calculation_formula' => 'SUM(Deal Value * Probability %)',
            'monthly_forecast_q3' => ',374,166.67 per month'
        ];
    }
}
