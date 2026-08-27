<?php

namespace App\Services;

class BrandZoAgentBillingService
{
    public static function getAgentBillingMetrics()
    {
        return [
            'pricing_plans' => [
                'Starter' => '₹999 / month (5 AI Agents)',
                'Professional' => '₹4,999 / month (25 AI Agents)',
                'Enterprise' => 'Custom Dedicated Cloud'
            ],
            'monthly_recurring_revenue' => '₹42.8 Lakhs ARR',
            'token_metering_accuracy' => '100% Real-Time'
        ];
    }
}
