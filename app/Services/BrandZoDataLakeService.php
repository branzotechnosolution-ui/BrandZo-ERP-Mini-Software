<?php

namespace App\Services;

class BrandZoDataLakeService
{
    public static function streamBusinessEvent($event, $payload = [], $companyId = 1)
    {
        return [
            'status' => 'Streamed',
            'event' => $event,
            'company_id' => $companyId,
            'timestamp' => now()->toIso8601String()
        ];
    }
}
