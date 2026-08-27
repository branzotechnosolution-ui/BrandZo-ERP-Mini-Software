<?php

namespace App\Services;

class BrandZoAiSupportAgentService
{
    public static function getAiSupportAgentMetrics()
    {
        return [
            'automated_tickets_ratio' => '80% Tickets Automated',
            'avg_response_time' => '1.42 Mins (< 2 Mins SLA)',
            'sla_compliance' => '99.6% SLA Compliance',
            'active_support_agents' => 52000
        ];
    }
}
