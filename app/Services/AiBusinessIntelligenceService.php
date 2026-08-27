<?php

namespace App\Services;

use App\Models\Lead;
use App\Models\User;
use App\Models\Invoice;
use Illuminate\Support\Facades\DB;

class AiBusinessIntelligenceService
{
    public static function getHighPriorityLeadsToday($companyId = 1)
    {
        return Lead::where('company_id', $companyId)
            ->whereNotNull('next_follow_up')
            ->whereDate('next_follow_up', '<=', today())
            ->orderBy('lead_score', 'desc')
            ->limit(10)
            ->get();
    }

    public static function getInvoicesNeedingAttention($companyId = 1)
    {
        return Invoice::where('company_id', $companyId)
            ->whereIn('status', ['unpaid', 'partial'])
            ->whereDate('due_date', '<', today())
            ->get();
    }

    public static function getLowPerformanceEmployees($companyId = 1)
    {
        return User::where('company_id', $companyId)
            ->whereHas('roles', function ($query) {
                $query->where('name', 'employee');
            })
            ->limit(5)
            ->get();
    }

    public static function predictMonthlySales($companyId = 1)
    {
        $totalPipeline = Lead::where('company_id', $companyId)->sum('value');
        $conversionRate = 0.25;
        return $totalPipeline * $conversionRate;
    }
}
