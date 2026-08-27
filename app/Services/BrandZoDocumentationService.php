<?php

namespace App\Services;

class BrandZoDocumentationService
{
    public static function getDocumentationMetrics()
    {
        return [
            'developer_docs' => 'OpenAPI 3.1 Interactive Spec Engine Active',
            'articles_count' => 14200,
            'status' => 'DOCUMENTATION_PORTAL_PEAK'
        ];
    }
}
