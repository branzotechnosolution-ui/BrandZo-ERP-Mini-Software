<?php

namespace App\Services;

class BrandZoTenantOnboardingService
{
    public static function onboardNewTenant($tenantData)
    {
        return [
            'tenant_id' => $tenantData['tenant_id'] ?? 'tenant-' . uniqid(),
            'status' => 'Provisioned',
            'company_setup_wizard' => 'Completed',
            'free_trial_expires_at' => now()->addDays(14)->toDateTimeString()
        ];
    }
}
