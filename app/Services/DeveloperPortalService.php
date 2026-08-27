<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DeveloperPortalService
{
    public static function generateApiKey($userId, $keyName, $companyId = 1)
    {
        $key = 'bz_' . Str::random(40);
        DB::table('api_keys')->insert([
            'company_id' => $companyId,
            'user_id' => $userId,
            'key_name' => $keyName,
            'api_key' => $key,
            'permissions' => json_encode(['all']),
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return $key;
    }

    public static function registerWebhook($targetUrl, $eventType, $companyId = 1)
    {
        return DB::table('developer_webhooks')->insertGetId([
            'company_id' => $companyId,
            'target_url' => $targetUrl,
            'event_type' => $eventType,
            'secret_token' => Str::random(32),
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
