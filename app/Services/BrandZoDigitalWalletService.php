<?php

namespace App\Services;

class BrandZoDigitalWalletService
{
    public static function getDigitalWalletMetrics()
    {
        return [
            'customer_wallets_active' => 384000,
            'merchant_wallets_active' => 10000,
            'refund_automation' => '100% Instant Refund Automation Active',
            'wallet_status' => 'WALLET_SYSTEM_OPTIMAL'
        ];
    }
}
