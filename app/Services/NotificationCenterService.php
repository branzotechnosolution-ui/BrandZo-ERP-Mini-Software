<?php

namespace App\Services;

use App\Services\WhatsAppService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class NotificationCenterService
{
    public static function notify($userId, $event, $title, $message, $mobile = null, $companyId = 1)
    {
        DB::table('system_notifications')->insert([
            'company_id' => $companyId,
            'user_id' => $userId,
            'event' => $event,
            'title' => $title,
            'message' => $message,
            'read' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Log::info("In-App Notification created for User ID {$userId}: {$title}");

        if (!empty($mobile)) {
            $ws = new WhatsAppService($companyId);
            $ws->sendNotification($mobile, $event, [
                'company_name' => 'BrandZo ERP',
                'client_name' => $title
            ]);
        }

        return true;
    }
}
