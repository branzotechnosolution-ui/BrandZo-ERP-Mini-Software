<?php

namespace App\Services;

class BrandZoGlobalEconomySimulationService
{
    public static function simulateHorizon($years = 5)
    {
        return [
            'horizon_years' => $years,
            'projected_arr' => $years == 25 ? '.2B ARR' : ($years == 10 ? 'M ARR' : 'M ARR'),
            'risk_prediction' => 'Low Risk',
            'recommended_expansion' => 'Global AI Infrastructure Ecosystem'
        ];
    }
}
