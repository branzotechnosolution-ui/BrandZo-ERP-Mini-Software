<?php

namespace App\Services;

class BrandZoWhiteLabelService
{
    public static function getWhiteLabelConfig()
    {
        return [
            'custom_domain' => 'erp.clientbrand.com',
            'brand_colors' => ['primary' => '#1d4ed8', 'secondary' => '#0f172a'],
            'custom_logo' => '/assets/images/custom-logo.png',
            'custom_login_page' => 'Active'
        ];
    }
}
