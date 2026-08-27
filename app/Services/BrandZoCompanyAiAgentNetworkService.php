<?php

namespace App\Services;

class BrandZoCompanyAiAgentNetworkService
{
    public static function getActiveCompanyAgents()
    {
        return [
            'Sales Negotiation Agent',
            'Procurement Agent',
            'Partnership Agent',
            'Finance Verification Agent',
            'Compliance Agent'
        ];
    }
}
