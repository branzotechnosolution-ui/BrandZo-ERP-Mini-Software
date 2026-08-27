<?php

namespace App\Services;

class BrandZoFraudDetectionService
{
    public static function getFraudDetectionMetrics()
    {
        return [
            'fraud_detection_accuracy' => '99.98%',
            'threats_blocked_24h' => 1420,
            'chargeback_rate' => '0.001%',
            'suspicious_transactions_flagged' => 0
        ];
    }
}
