<?php

namespace App\Services;

class BrandZoAgencyBpoService
{
    public static function getCallCenterSummary()
    {
        return [
            'active_agents' => 120,
            'calls_handled_today' => 4820,
            'qa_scorecard' => '96.8%',
            'avg_handle_time' => '3m 15s'
        ];
    }
}
