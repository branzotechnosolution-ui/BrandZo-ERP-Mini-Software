<?php

namespace App\Services;

class BrandZoScenarioPlanningService
{
    public static function getScenarioMetrics()
    {
        return [
            'best_case_growth' => '+58.4% YoY Growth',
            'normal_case_growth' => '+28.4% YoY Growth',
            'worst_case_resilience' => '99.2% Survival Buffer'
        ];
    }
}
