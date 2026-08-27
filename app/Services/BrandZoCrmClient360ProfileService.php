<?php

namespace App\Services;

class BrandZoCrmClient360ProfileService
{
    public static function getClient360Profile($clientCode = 'CLI-2026-9942')
    {
        return [
            'client_code' => $clientCode,
            'company_name' => 'Acme Global Enterprises',
            'contact_persons' => 'John Doe (CEO), Jane Smith (CTO)',
            'phone' => '+1-555-0199',
            'email' => 'john@acmeglobal.com',
            'website' => 'https://acmeglobal.com',
            'industry' => 'Enterprise Software & Technology',
            'address' => '100 Silicon Valley Blvd, Suite 400, CA',
            'assigned_account_manager' => 'Senior Account Executive',
            'status' => 'CLIENT_360_PROFILE_ACTIVE'
        ];
    }

    public static function getClientTimeline($clientCode = 'CLI-2026-9942')
    {
        return [
            'timeline' => [
                ['timestamp' => '2026-08-01 10:00:00', 'event' => 'Lead Created (LEAD-2026-9942)'],
                ['timestamp' => '2026-08-05 14:30:00', 'event' => 'Discovery Call Completed'],
                ['timestamp' => '2026-08-10 11:00:00', 'event' => 'Converted To Deal (DEAL-2026-9942)'],
                ['timestamp' => '2026-08-15 16:00:00', 'event' => 'Proposal Sent & Negotiated'],
                ['timestamp' => '2026-08-20 09:00:00', 'event' => 'Deal Won (,000.00)'],
                ['timestamp' => '2026-08-21 18:49:15', 'event' => 'Converted To Client (CLI-2026-9942)'],
                ['timestamp' => '2026-08-21 19:00:00', 'event' => 'Active Account Manager Assigned']
            ]
        ];
    }
}
