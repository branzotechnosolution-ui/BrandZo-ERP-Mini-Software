<?php

namespace App\Services;

class BrandZoRealEstateService
{
    public static function getPropertySummary()
    {
        return [
            'total_properties' => 210,
            'active_leads' => 450,
            'scheduled_site_visits' => 28,
            'bookings_this_month' => 18
        ];
    }
}
