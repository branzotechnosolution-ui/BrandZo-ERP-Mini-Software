<?php

namespace App\Services;

class BrandZoSupportMarketplaceService
{
    public static function getSupportMarketplaceMetrics()
    {
        return [
            'marketplace_bots' => 384,
            'channels' => ['WhatsApp Business', 'Email', 'Live Chat', 'Voice'],
            'status' => 'SUPPORT_MARKETPLACE_PEAK'
        ];
    }
}
