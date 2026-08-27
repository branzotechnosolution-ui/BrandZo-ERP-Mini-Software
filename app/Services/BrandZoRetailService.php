<?php

namespace App\Services;

class BrandZoRetailService
{
    public static function getPosSummary()
    {
        return [
            'pos_terminals' => 16,
            'today_sales' => 12450.00,
            'low_stock_alerts' => 5,
            'loyalty_members' => 3120
        ];
    }
}
