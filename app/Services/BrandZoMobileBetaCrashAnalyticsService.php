<?php

namespace App\Services;

class BrandZoMobileBetaCrashAnalyticsService
{
    public static function getMobileBetaCrashAnalyticsMetrics()
    {
        return [
            'active_beta_testers' => 4800,
            'crash_free_users' => '99.98%',
            'testflight_version' => 'v3.4.0 Build 142',
            'status' => 'BETA_CRASH_ANALYTICS_PEAK'
        ];
    }
}
