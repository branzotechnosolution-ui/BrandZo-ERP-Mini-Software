<?php

namespace App\Services;

class BrandZoSupportAIService
{
    public static function getSupportAiMetrics()
    {
        return [
            'auto_resolved_tickets' => '98.4% Auto-Resolved in < 1.4s',
            'knowledge_brain_integration' => 'Active 1.84M Knowledge Nodes',
            'customer_sentiment_score' => '4.95 / 5.0 Rating'
        ];
    }
}
