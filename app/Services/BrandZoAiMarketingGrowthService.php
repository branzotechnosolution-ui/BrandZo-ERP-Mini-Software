<?php

namespace App\Services;

class BrandZoAiMarketingGrowthService
{
    public static function getMarketingGrowthMetrics()
    {
        return [
            'active_ai_campaigns' => 42,
            'channels' => ['Email Automation', 'WhatsApp Outbound', 'LinkedIn Sales Nav', 'Google Ads', 'SEO Landing Pages'],
            'lead_qualification_score_avg' => '94 / 100',
            'automated_emails_sent_24h' => 184000
        ];
    }
}
