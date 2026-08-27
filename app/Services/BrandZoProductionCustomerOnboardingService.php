<?php

namespace App\Services;

class BrandZoProductionCustomerOnboardingService
{
    public static function getCustomerOnboardingMetrics()
    {
        return [
            'provisioning_speed' => '2.40 Seconds Automated Setup',
            'active_onboardings' => 18400,
            'status' => 'CUSTOMER_ONBOARDING_PEAK'
        ];
    }
}
