<?php

namespace App\Services;

class BrandZoUniversalKnowledgeUniverseService
{
    public static function getKnowledgeSources()
    {
        return [
            'data_sources' => ['CRM', 'ERP', 'HRMS', 'Finance', 'Projects', 'Marketplace', 'Customer Portal'],
            'global_knowledge_nodes' => 4850000,
            'pattern_discovery' => 'Active'
        ];
    }
}
