<?php

namespace App\Services;

class BrandZoCapitalPlanningService
{
    public static function getCapitalPlanningMetrics()
    {
        return [
            'capital_efficiency_score' => '99.6 / 100 Efficiency',
            'r_and_d_allocation' => '42.8%',
            'sales_growth_allocation' => '38.4%',
            'runway_months' => '48 Months Runway'
        ];
    }
}
