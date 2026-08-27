<?php

namespace App\Services;

class BrandZoTrialAccountSystemService
{
    public static function getTrialAccountMetrics()
    {
        return [
            'active_trials' => 4280,
            'trial_duration' => '14 Days Full Access',
            'trial_conversion_rate' => '42.80%',
            'status' => 'TRIAL_SYSTEM_ACTIVE'
        ];
    }
}
