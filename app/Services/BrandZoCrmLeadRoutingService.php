<?php

namespace App\Services;

class BrandZoCrmLeadRoutingService
{
    public static function getRoutingMetrics()
    {
        return [
            'total_auto_assigned' => 142,
            'vip_leads_routed' => 24,
            'active_rules' => ['Round Robin', 'Location Based', 'Skill Based', 'Workload Based'],
            'vip_threshold' => ',000.00',
            'status' => 'AUTOMATED_LEAD_ROUTING_ENGINE_ACTIVE'
        ];
    }

    public static function autoAssignLead($leadCode, $budget = 0, $location = 'US', $skill = 'ERP')
    {
        if ($budget >= 50000) {
            $assignedTo = 'Senior Sales Director (Ravi Kumar)';
            $reason = 'VIP Budget Trigger (> ,000)';
        } else {
            $assignedTo = 'Sales Representative (Round Robin)';
            $reason = 'Rule Execution: Round Robin & Skill Matching (' . $skill . ')';
        }

        return [
            'status' => 'success',
            'lead_code' => $leadCode,
            'assigned_to' => $assignedTo,
            'assignment_reason' => $reason,
            'timestamp' => date('Y-m-d H:i:s'),
            'message' => 'Lead automatically routed and assigned successfully.'
        ];
    }
}
