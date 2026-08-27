<?php

namespace App\Services;

class BrandZoWorkflowTemplateService
{
    public static function getWorkflowTemplateMetrics()
    {
        return [
            'published_templates_count' => 384,
            'categories' => ['Sales Automation', 'Invoice & Tax Sync', 'Customer Success Retention', 'AI SDR Outreach'],
            'featured_template' => 'Autonomous Invoice & GST Reconciliation Workflow'
        ];
    }
}
