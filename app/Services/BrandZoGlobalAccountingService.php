<?php

namespace App\Services;

class BrandZoGlobalAccountingService
{
    public static function getGlobalAccountingMetrics()
    {
        return [
            'accounting_coverage' => '184 Countries',
            'tax_compliance' => '100% Tax Compliant (GST/VAT/Sales Tax)',
            'automated_reconciliation' => '99.98% Precision',
            'supported_currencies' => 7
        ];
    }
}
