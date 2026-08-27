<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class WhatsAppService
{
    protected $provider;
    protected $apiKey;
    protected $phoneNumberId;
    protected $companyId;

    public function __construct($companyId = 1)
    {
        $this->companyId = $companyId;
        $settings = DB::table('whatsapp_settings')->where('company_id', $companyId)->first();

        $this->provider = $settings->provider ?? 'meta';
        $this->apiKey = $settings->api_key ?? config('services.whatsapp.api_key', '');
        $this->phoneNumberId = $settings->phone_number_id ?? config('services.whatsapp.phone_number_id', '');
    }

    public function sendNotification($recipientMobile, $event, $data = [])
    {
        if (empty($recipientMobile)) {
            return false;
        }

        $message = $this->buildTemplateMessage($event, $data);

        try {
            switch ($this->provider) {
                case 'meta':
                    return $this->sendMetaApi($recipientMobile, $message);
                case 'aisensy':
                    return $this->sendAiSensyApi($recipientMobile, $message);
                case 'interakt':
                    return $this->sendInteraktApi($recipientMobile, $message);
                default:
                    Log::info("WhatsApp [$this->provider] Notification to $recipientMobile: $message");
                    return true;
            }
        } catch (\Exception $e) {
            Log::error("WhatsApp notification error: " . $e->getMessage());
            return false;
        }
    }

    protected function buildTemplateMessage($event, $data)
    {
        $companyName = $data['company_name'] ?? 'BranZo Techno Solution';
        $clientName = $data['client_name'] ?? 'Valued Client';

        switch ($event) {
            case 'new_lead':
                return "Hello {$clientName}, thank you for reaching out to {$companyName}! Our team has received your request and will contact you shortly.";
            case 'follow_up':
                return "Hello {$clientName}, this is a gentle reminder regarding your upcoming consultation with {$companyName}.";
            case 'proposal_sent':
                return "Hello {$clientName}, your proposal from {$companyName} has been generated and sent to your email.";
            case 'confirmed_deal':
                return "Congratulations {$clientName}! Your deal with {$companyName} has been confirmed. Welcome aboard!";
            default:
                return "Notification from {$companyName}";
        }
    }

    protected function sendMetaApi($mobile, $message)
    {
        Log::info("Meta WhatsApp API sent to $mobile: $message");
        return true;
    }

    protected function sendAiSensyApi($mobile, $message)
    {
        Log::info("AiSensy WhatsApp API sent to $mobile: $message");
        return true;
    }

    protected function sendInteraktApi($mobile, $message)
    {
        Log::info("Interakt WhatsApp API sent to $mobile: $message");
        return true;
    }
}
