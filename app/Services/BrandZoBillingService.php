<?php

namespace App\Services;

class BrandZoBillingService
{
    public static function getSubscriptionPlans()
    {
        return [
            'plans' => [
                'Starter' => ['price' => '/mo', 'ai_tokens' => '100,000 Tokens', 'features' => ['Core ERP', 'Basic AI']],
                'Business' => ['price' => '/mo', 'ai_tokens' => '1,000,000 Tokens', 'features' => ['Full ERP + CRM', 'AI Workforce']],
                'Enterprise' => ['price' => ',999/mo', 'ai_tokens' => '10,000,000 Tokens', 'features' => ['Full Suite', 'Dedicated AGI Brain']],
                'Global Enterprise' => ['price' => 'Custom', 'ai_tokens' => 'Unlimited Tokens', 'features' => ['Civilization OS', 'Multi-Tenant Cloud']]
            ],
            'payment_gateways' => ['Stripe Billing', 'Razorpay', 'PayPal'],
            'token_consumption_billing' => 'Real-Time Pay-As-You-Go Active'
        ];
    }
}
