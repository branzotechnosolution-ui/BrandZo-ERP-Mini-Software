<?php

namespace App\Services;

class BrandZoMarketplaceRevenueService
{
    public static function getMarketplaceRevenueMetrics()
    {
        return [
            'marketplace_gmv' => '.2 Million',
            'developer_payouts' => '.94 Million',
            'brandzo_net_revenue' => '.26 Million',
            'revenue_split' => '70% Developer / 30% BrandZo'
        ];
    }
}
