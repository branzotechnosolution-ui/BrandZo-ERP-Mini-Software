<?php

namespace App\Services;

class BrandZoAiAppStoreService
{
    public static function getAppStoreMetrics()
    {
        return [
            'published_third_party_apps' => 1420,
            'active_developers' => 3840,
            'top_categories' => ['AI Payroll', 'AI Legal Compliance', 'AI Marketing Automation', 'AI Sales Bot'],
            'monthly_app_store_revenue' => '₹84.5 Lakhs'
        ];
    }
}
