<?php

namespace App\Services;

class BrandZoMarketExpansionService
{
    public static function getMarketExpansionMetrics()
    {
        return [
            'expansion_target_pipeline' => '.4 Million USD ARR',
            'target_regions' => ['APAC Hub', 'ME-South Dubai', 'EU-Central Frankfurt', 'US-East Virginia'],
            'readiness' => '100% Deployed & Active'
        ];
    }
}
