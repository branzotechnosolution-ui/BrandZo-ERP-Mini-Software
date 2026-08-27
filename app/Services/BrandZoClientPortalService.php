<?php

namespace App\Services;

class BrandZoClientPortalService
{
    public static function getClientPortalMetrics()
    {
        return [
            'active_client_portals' => 1240,
            'self_service_resolution_rate' => '92.4%',
            'support_ticket_response_time' => '< 4 minutes'
        ];
    }
}
