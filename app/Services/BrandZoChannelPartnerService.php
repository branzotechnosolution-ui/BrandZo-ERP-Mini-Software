<?php

namespace App\Services;

class BrandZoChannelPartnerService
{
    public static function getChannelPartnerMetrics()
    {
        return [
            'certified_partners' => '10,000 Certified Partners',
            'deal_registrations_24h' => 384,
            'certification_courses' => 14,
            'active_reseller_nodes' => 38400
        ];
    }
}
