<?php

namespace App\Services;

class BrandZoAiProposalGenerationService
{
    public static function getAiProposalGenerationMetrics()
    {
        return [
            'proposal_generation_latency' => '0.42s Sub-second Generation',
            'generated_proposals' => 18400,
            'status' => 'PROPOSAL_ENGINE_PEAK'
        ];
    }
}
