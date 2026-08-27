<?php

namespace App\Services;

class BrandZoApiMarketplaceService
{
    public static function getApiMarketplaceMetrics()
    {
        return [
            'connectors' => [
                'CRM' => ['Salesforce', 'HubSpot', 'Zoho CRM'],
                'Communication' => ['WhatsApp Business API', 'Slack', 'Microsoft Teams'],
                'Cloud' => ['AWS', 'Google Cloud', 'Azure'],
                'Payments' => ['Stripe', 'Razorpay', 'PayPal'],
                'Analytics' => ['Google Analytics', 'Power BI', 'Tableau']
            ],
            'status' => 'API_MARKETPLACE_PEAK'
        ];
    }
}
