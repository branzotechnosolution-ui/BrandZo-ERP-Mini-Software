<?php

namespace App\Services;

class BrandZoCustomerJourneyService
{
    public static function getCustomerJourneyMetrics()
    {
        return [
            'lifecycle_flow' => 'Lead -> Demo -> Purchase -> Onboarding -> Usage -> Renewal -> Expansion',
            'upgrade_intent_identified' => 384,
            'churn_risk_identified' => 3,
            'demanded_features_index' => ['AI SDR 3.0 Node Scaling', 'Multi-Region Data Room']
        ];
    }
}
