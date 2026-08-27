<?php

namespace App\Services;

class BrandZoGlobalMarketplaceService
{
    public static function getGlobalMarketplaceMetrics()
    {
        return [
            'marketplace_version' => 'v3.0 Enterprise App Marketplace',
            'published_apps' => 520,
            'marketplace_gmv' => '.2 Million',
            'paid_plugins_active' => 384
        ];
    }
}
