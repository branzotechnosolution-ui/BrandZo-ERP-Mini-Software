<?php

namespace App\Services;

use App\Services\NotificationCenterService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class WorkflowAutomationEngine
{
    public static function trigger($event, $payload = [], $companyId = 1)
    {
        Log::info("WorkflowAutomationEngine triggered event '{$event}' for Company ID {$companyId}");

        $rules = DB::table('workflow_automation_rules')
            ->where('company_id', $companyId)
            ->where('trigger_event', $event)
            ->where('status', 1)
            ->get();

        foreach ($rules as $rule) {
            self::executeAction($rule->action_type, $rule->action_payload, $payload, $companyId);
        }

        return true;
    }

    protected static function executeAction($actionType, $rulePayload, $eventPayload, $companyId)
    {
        switch ($actionType) {
            case 'send_notification':
                NotificationCenterService::notify(
                    $eventPayload['user_id'] ?? 1,
                    'workflow_alert',
                    $rulePayload['title'] ?? 'Automation Alert',
                    $rulePayload['message'] ?? 'Action triggered automatically.',
                    $eventPayload['mobile'] ?? null,
                    $companyId
                );
                break;
            default:
                Log::info("Executed automation action '{$actionType}'");
                break;
        }
    }
}
