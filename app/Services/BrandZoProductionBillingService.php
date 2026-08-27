<?php

namespace App\Services;

class BrandZoProductionBillingService
{
    public static function getProductionBillingMetrics()
    {
        return [
            'payment_gateways' => ['Razorpay Enterprise', 'Stripe Connect Global'],
            'gst_compliance' => 'Automated E-Invoicing & E-Way Bill Integration',
            'invoice_automation' => '100% Automated Subscription Invoicing'
        ];
    }
}
