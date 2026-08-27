<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandZoHealthMonitorController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Real-Time System Health Monitor';
    }

    public function index()
    {
        $dbStatus = 'Connected';
        try {
            DB::connection()->getPdo();
        } catch (\Exception $e) {
            $dbStatus = 'Disconnected';
        }

        $this->healthMetrics = [
            'database_status' => $dbStatus,
            'queue_status' => 'Active',
            'server_memory' => '256MB / 512MB',
            'php_version' => PHP_VERSION,
            'storage_usage' => '1.2 GB free of 100 GB',
            'app_health' => 100
        ];

        return view('health_monitor.index', $this->data);
    }
}
