<?php

namespace App\Services;

use App\Models\User;
use App\Models\Lead;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LeadAutomationService
{
    public static function assignLeadRoundRobin($leadId, $companyId = 1)
    {
        $salesEmployees = User::whereHas('roles', function ($query) {
            $query->whereIn('name', ['sales_employee', 'sales_manager', 'employee', 'admin']);
        })->where('company_id', $companyId)->where('status', 'active')->pluck('id')->toArray();

        if (empty($salesEmployees)) {
            return false;
        }

        $settings = DB::table('lead_automation_settings')->where('company_id', $companyId)->first();
        $lastAssignedId = $settings->last_assigned_user_id ?? 0;

        $nextUserIndex = 0;
        if ($lastAssignedId > 0) {
            $currentIndex = array_search($lastAssignedId, $salesEmployees);
            if ($currentIndex !== false && $currentIndex + 1 < count($salesEmployees)) {
                $nextUserIndex = $currentIndex + 1;
            }
        }

        $assignedUserId = $salesEmployees[$nextUserIndex];

        Lead::where('id', $leadId)->update(['agent_id' => $assignedUserId]);

        DB::table('lead_automation_settings')->updateOrInsert(
            ['company_id' => $companyId],
            ['last_assigned_user_id' => $assignedUserId, 'updated_at' => now()]
        );

        Log::info("Lead ID {$leadId} automatically assigned to User ID {$assignedUserId} via Round Robin.");
        return $assignedUserId;
    }

    public static function calculateLeadScore($lead)
    {
        $score = 50;

        if (!empty($lead->client_email)) $score += 10;
        if (!empty($lead->mobile)) $score += 10;
        if (!empty($lead->website)) $score += 10;
        if (!empty($lead->value) && $lead->value > 50000) $score += 20;

        return min(100, $score);
    }
}
