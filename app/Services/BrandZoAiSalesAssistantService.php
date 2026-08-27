<?php

namespace App\Services;

use App\Models\Lead;

class BrandZoAiSalesAssistantService
{
    public static function qualifyLead($leadId)
    {
        $lead = Lead::find($leadId);
        if (!$lead) return null;

        $score = $lead->lead_score ?? 50;
        $status = ($score >= 70) ? 'Highly Qualified' : (($score >= 40) ? 'Moderately Qualified' : 'Low Prospect');

        return [
            'lead_id' => $leadId,
            'score' => $score,
            'qualification_status' => $status,
            'closing_probability' => min(95, max(10, $score * 0.9)),
            'suggested_action' => ($score >= 70) ? 'Send Proposal Immediately' : 'Schedule Follow-up Call'
        ];
    }

    public static function generateEmailDraft($leadId)
    {
        $lead = Lead::find($leadId);
        $name = $lead->client_name ?? 'Client';
        $company = 'BranZo Techno Solution';

        return "Dear {$name},\n\nThank you for exploring {$company} solutions. We would love to discuss how our enterprise automation platform can streamline your business workflows.\n\nBest regards,\nSales Team";
    }

    public static function generateWhatsAppDraft($leadId)
    {
        $lead = Lead::find($leadId);
        $name = $lead->client_name ?? 'Client';

        return "Hi {$name}, thanks for reaching out to BranZo Techno Solution! Let us know if you would like to schedule a quick 10-minute demo today.";
    }
}
