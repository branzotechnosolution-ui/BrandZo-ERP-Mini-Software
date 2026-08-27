<?php

namespace App\Services;

class BrandZoIntegrationConnectorService
{
    public static function getAvailableConnectors()
    {
        return [
            ['name' => 'Salesforce CRM', 'category' => 'CRM', 'status' => 'Connected', 'last_sync' => now()->subMinutes(12)->toDateTimeString()],
            ['name' => 'HubSpot Marketing', 'category' => 'Marketing', 'status' => 'Connected', 'last_sync' => now()->subMinutes(5)->toDateTimeString()],
            ['name' => 'QuickBooks Online', 'category' => 'Finance', 'status' => 'Connected', 'last_sync' => now()->subHour()->toDateTimeString()],
            ['name' => 'Xero Accounting', 'category' => 'Finance', 'status' => 'Available', 'last_sync' => null],
            ['name' => 'Tally Prime ERP', 'category' => 'Finance', 'status' => 'Connected', 'last_sync' => now()->subMinutes(30)->toDateTimeString()],
            ['name' => 'WhatsApp Cloud API', 'category' => 'Messaging', 'status' => 'Connected', 'last_sync' => now()->toDateTimeString()],
            ['name' => 'Slack Workspace', 'category' => 'Productivity', 'status' => 'Connected', 'last_sync' => now()->toDateTimeString()],
            ['name' => 'Microsoft Teams', 'category' => 'Productivity', 'status' => 'Available', 'last_sync' => null],
        ];
    }
}
