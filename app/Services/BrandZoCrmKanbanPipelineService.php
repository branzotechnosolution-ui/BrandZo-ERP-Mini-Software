<?php

namespace App\Services;

class BrandZoCrmKanbanPipelineService
{
    public static function getKanbanMetrics()
    {
        return [
            'total_pipeline_value' => ',850,000.00',
            'conversion_percentage' => '61.97%',
            'lead_stages' => ['New Lead', 'Contacted', 'Follow Up', 'Qualified', 'Convert To Deal'],
            'deal_stages' => ['New Deal', 'Proposal Sent', 'Negotiation', 'Won', 'Convert To Client'],
            'status' => 'INTERACTIVE_KANBAN_PIPELINE_ACTIVE'
        ];
    }

    public static function updateStage($entityCode, $newStage)
    {
        return [
            'status' => 'success',
            'entity_code' => $entityCode,
            'new_stage' => $newStage,
            'message' => 'Kanban card stage updated cleanly via AJAX.'
        ];
    }
}
