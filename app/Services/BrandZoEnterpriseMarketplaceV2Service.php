<?php

namespace App\Services;

class BrandZoEnterpriseMarketplaceV2Service
{
    public static function getMarketplaceMetrics()
    {
        return [
            'total_marketplace_products' => 384,
            'categories' => ['Healthcare Pack', 'Retail ERP Pack', 'Real Estate Pack', 'AI Sales Automation Add-on', 'Security SOC Plugin'],
            'total_purchases_24h' => 1420,
            'marketplace_grm' => '.2 Million'
        ];
    }
}
