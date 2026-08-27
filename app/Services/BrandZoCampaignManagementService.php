<?php

namespace App\Services;

class BrandZoCampaignManagementService
{
    public static function getCampaignManagementMetrics()
    {
        return [
            'active_campaigns' => 384,
            'scheduled_campaigns' => 1420,
            'ab_test_experiments' => 42,
            'status' => 'CAMPAIGN_AUTOMATION_ACTIVE'
        ];
    }
}
