<?php

namespace App\Services;

class BrandZoSecurityOperationsService
{
    public static function getSecurityOperationsMetrics()
    {
        return [
            'soc_status' => '24/7 Autonomous SOC Active',
            'mttr_minutes' => 0.42,
            'zero_trust_policy' => '100% Zero-Trust Enforced'
        ];
    }
}
