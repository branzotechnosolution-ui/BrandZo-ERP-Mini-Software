<?php

namespace App\Services;

class BrandZoAiMeetingAssistantService
{
    public static function getAiMeetingAssistantMetrics()
    {
        return [
            'ai_summaries_generated' => 18400,
            'transcription_precision' => '99.98%',
            'action_items_extracted' => 14200,
            'status' => 'AUTO_TRANSCRIPTION_ACTIVE'
        ];
    }
}
