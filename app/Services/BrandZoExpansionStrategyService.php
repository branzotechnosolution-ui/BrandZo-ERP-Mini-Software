<?php

namespace App\Services;

class BrandZoExpansionStrategyService
{
    public static function getExpansionMetrics()
    {
        return [
            'target_expansion_countries' => ['United States', 'United Kingdom', 'Germany', 'Japan', 'India', 'UAE', 'Singapore', 'Australia'],
            'market_entry_readiness' => '99.4%',
            'competitor_ai_moat_score' => '98.5 / 100'
        ];
    }
}
