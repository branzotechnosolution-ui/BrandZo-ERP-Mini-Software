<?php

namespace App\Services;

class BrandZoCrmSalesPipelineService
{
    public static function getCrmSalesPipelineMetrics()
    {
        return [
            'active_pipeline_value' => '.00 Million Pipeline',
            'crm_stage_velocity' => '1.42x Faster Deal Closure Speed',
            'status' => 'CRM_PIPELINE_OPTIMAL'
        ];
    }
}
