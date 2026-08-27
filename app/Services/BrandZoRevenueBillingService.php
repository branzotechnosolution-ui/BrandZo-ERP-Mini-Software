<?php

namespace App\Services;

class BrandZoRevenueBillingService
{
    public static function getRevenueBillingMetrics()
    {
        return [
            'supported_gateways' => ['Razorpay', 'Stripe Enterprise', 'PayPal Global'],
            'gst_vat_tax_compliance' => '100% Automated GST/VAT Billing',
            'monthly_recurring_revenue' => '₹1.84 Crores ARR'
        ];
    }
}
