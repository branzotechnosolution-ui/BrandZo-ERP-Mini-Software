<?php

namespace App\Services;

class BrandZoAiChatbotService
{
    public static function getAiChatbotMetrics()
    {
        return [
            'monthly_chat_sessions' => 184000,
            'intent_detection_accuracy' => '99.80%',
            'first_contact_resolution' => '99.58%',
            'status' => 'CHATBOT_OPERATING_AT_PEAK'
        ];
    }
}
