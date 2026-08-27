<?php

namespace App\Services;

class BrandZoCustomer360Service
{
    public static function getCustomer360Metrics()
    {
        return [
            'customer_360_profiles' => 84200,
            'customer_ltv' => '₹1.42 Lakhs',
            'ltv_cac_ratio' => '36.9x',
            'customer_health_score' => '99.6 / 100'
        ];
    }
}
