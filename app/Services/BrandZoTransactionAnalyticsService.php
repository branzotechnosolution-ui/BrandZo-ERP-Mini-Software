<?php

namespace App\Services;

class BrandZoTransactionAnalyticsService
{
    public static function getTransactionAnalyticsMetrics()
    {
        return [
            'revenue_transaction_volume' => '₹22.08 Crores ARR Volume',
            'gateway_latency' => '1.42ms',
            'active_gateways' => ['Razorpay', 'Stripe', 'PayPal', 'UPI Direct', 'Bank Wire'],
            'gateway_performance_score' => '100 / 100 Health'
        ];
    }
}
