<?php

namespace App\Services;

class BrandZoInfrastructureMonitoringService
{
    public static function getInfrastructureMonitoringMetrics()
    {
        return [
            'cpu_utilization' => '14.20%',
            'memory_utilization' => '38.40%',
            'db_query_latency' => '1.42ms',
            'api_gateway_latency' => '1.42ms',
            'active_servers' => 3840
        ];
    }
}
