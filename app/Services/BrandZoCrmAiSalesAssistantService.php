<?php

namespace App\Services;

class BrandZoCrmAiSalesAssistantService
{
    public static function getAssistantMetrics()
    {
        return [
            'active_campaigns' => 6,
            'leads_enrolled' => 142,
            'messages_sent' => 840,
            'replies_received' => 324,
            'open_rate' => '64.20%',
            'reply_rate' => '38.50%',
            'revenue_generated' => ',450,000.00',
            'status' => 'AI_SALES_ASSISTANT_DRIP_ENGINE_ACTIVE'
        ];
    }

    public static function generateReply($channel = 'WhatsApp', $context = 'Proposal Follow-up')
    {
        if (strtolower($channel) === 'whatsapp') {
            $msg = 'Hi Alex! Quick follow-up on the BranZo Techno Solution proposal sent yesterday. Let me know if you have 5 mins for a brief quick call today!';
        } else {
            $msg = 'Dear Alex,\n\nI hope this email finds you well. I wanted to touch base regarding the BrandZo AI ERP OS proposal for Horizon Global. Please let us know if you need any custom API documentation.\n\nBest regards,\nSales Team';
        }

        return [
            'status' => 'success',
            'channel' => $channel,
            'context' => $context,
            'generated_reply' => $msg,
            'timestamp' => date('Y-m-d H:i:s'),
            'message' => 'AI reply suggestion generated successfully.'
        ];
    }
}
