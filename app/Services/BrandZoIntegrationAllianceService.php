<?php

namespace App\Services;

class BrandZoIntegrationAllianceService
{
    public static function getIntegrationAllianceMetrics()
    {
        return [
            'tier1_integrations' => ['Salesforce', 'SAP', 'Oracle', 'Microsoft', 'Google Workspace', 'HubSpot'],
            'co_selling_deals' => 1420,
            'joint_solutions_published' => 384
        ];
    }
}
