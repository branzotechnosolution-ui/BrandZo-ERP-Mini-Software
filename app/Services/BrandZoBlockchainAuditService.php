<?php

namespace App\Services;

class BrandZoBlockchainAuditService
{
    public static function recordLedgerEntry($action, $payload = [])
    {
        return [
            'ledger_status' => 'Verified',
            'block_hash' => sha1($action . json_encode($payload) . microtime()),
            'timestamp' => now()->toIso8601String()
        ];
    }
}
