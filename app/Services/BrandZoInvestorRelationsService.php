<?php

namespace App\Services;

class BrandZoInvestorRelationsService
{
    public static function getInvestorRelationsMetrics()
    {
        return [
            'active_investor_pipeline' => 42,
            'term_sheets_pending' => 3,
            'investor_sentiment' => 'Highly Bullish',
            'last_communication' => 'Executive Partner Term Sheet Signoff'
        ];
    }
}
