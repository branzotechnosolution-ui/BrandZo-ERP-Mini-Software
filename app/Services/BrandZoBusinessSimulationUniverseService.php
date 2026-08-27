<?php

namespace App\Services;

class BrandZoBusinessSimulationUniverseService
{
    public static function runUniverseSimulation($timeline = 50)
    {
        return [
            'timeline_years' => $timeline,
            'projected_ecosystem_arr' => $timeline == 50 ? '.5B ARR' : ($timeline == 10 ? '.2B ARR' : 'M ARR'),
            'competitor_response_model' => 'Fully Neutralized'
        ];
    }
}
