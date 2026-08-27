<?php

namespace App\Services;

class BrandZoManufacturingService
{
    public static function getBomSummary()
    {
        return [
            'active_boms' => 84,
            'raw_material_stock' => '94% Optimal',
            'production_orders' => 26,
            'qa_approval_rate' => '99.2%'
        ];
    }
}
