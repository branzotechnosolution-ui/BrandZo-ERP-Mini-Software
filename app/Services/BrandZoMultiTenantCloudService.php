<?php

namespace App\Services;

class BrandZoMultiTenantCloudService
{
    public static function getTenantTypes()
    {
        return [
            'Starter Workspace',
            'Business Workspace',
            'Enterprise Workspace',
            'Global Enterprise Account'
        ];
    }
}
