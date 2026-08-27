<?php

namespace App\Services;

class BrandZoSupplierIntelligenceService
{
    public static function getSupplierIntelligenceMetrics()
    {
        return [
            'supplier_score' => '99.6 / 100',
            'on_time_delivery' => '99.80%',
            'active_suppliers' => 1420,
            'gold_tier_vendors' => 384
        ];
    }
}
