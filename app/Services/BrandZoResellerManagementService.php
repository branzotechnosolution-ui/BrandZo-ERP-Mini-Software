<?php

namespace App\Services;

class BrandZoResellerManagementService
{
    public static function getResellerManagementMetrics()
    {
        return [
            'active_reseller_partners' => 14200,
            'sovereign_nations_covered' => 195,
            'tier_status' => 'TIER_1_CERTIFIED_GLOBAL_RESELLER',
            'status' => 'RESELLER_MANAGEMENT_PEAK'
        ];
    }
}
