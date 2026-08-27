<?php

namespace App\Services;

class BrandZoStartupFactoryService
{
    public static function getStartupFactoryMetrics()
    {
        return [
            'active_startups_launched' => 14,
            'provisioning_speed_sec' => 14.2,
            'assigned_ai_workforce' => 520000
        ];
    }
}
