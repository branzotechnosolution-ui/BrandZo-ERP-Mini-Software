<?php

namespace App\Services;

class BrandZoCloudInfrastructureService
{
    public static function getCloudInfrastructureMetrics()
    {
        return [
            'providers' => ['AWS', 'GCP', 'Azure'],
            'infrastructure_health_score' => '100 / 100 Health',
            'auto_scaling_status' => 'AUTOSCALING_OPTIMAL',
            'active_regions' => ['us-east-1', 'ap-south-1', 'eu-central-1', 'ap-southeast-1']
        ];
    }
}
