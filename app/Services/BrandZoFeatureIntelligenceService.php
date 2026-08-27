<?php

namespace App\Services;

class BrandZoFeatureIntelligenceService
{
    public static function getFeatureIntelligenceMetrics()
    {
        return [
            'utilization_rate' => '94.2% Feature Utilization',
            'top_requested_features' => ['AI SDR 3.0 Node Scaling', 'Multi-Region Data Room', 'Automated GST Invoice Bot'],
            'synthesized_feedbacks' => 10420
        ];
    }
}
