<?php

namespace App\Services;

class BrandZoMobileAppStoreDeploymentService
{
    public static function getMobileAppStoreDeploymentMetrics()
    {
        return [
            'app_version' => 'v3.4.0',
            'ios_app_store_status' => 'APPROVED (Ready for Sale)',
            'google_play_status' => 'APPROVED (Published to Production)',
            'status' => 'APP_STORE_DEPLOYMENT_PEAK'
        ];
    }
}
