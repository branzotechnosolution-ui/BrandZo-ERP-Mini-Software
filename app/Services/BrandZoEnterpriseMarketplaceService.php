<?php

namespace App\Services;

class BrandZoEnterpriseMarketplaceService
{
    public static function getMarketplaceMetrics()
    {
        return [
            'published_apps' => 520,
            'total_installs' => 142000,
            'avg_app_rating' => '4.98 / 5.0',
            'top_categories' => ['AI SDR', 'Healthcare ERP', 'Finance Automation', 'Supply Chain']
        ];
    }
}
