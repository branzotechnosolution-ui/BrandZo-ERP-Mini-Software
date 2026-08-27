<?php

namespace App\Services;

class BrandZoAgentRevenueService
{
    public static function getAgentRevenueMetrics()
    {
        return [
            'developer_revenue_share' => '70% Developer / 30% BrandZo',
            'total_agent_rev_distributed' => '₹4.28 Crores',
            'monetized_developer_agents' => 384
        ];
    }
}
