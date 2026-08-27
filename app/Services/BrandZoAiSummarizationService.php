<?php

namespace App\Services;

class BrandZoAiSummarizationService
{
    public static function getAiSummarizationMetrics()
    {
        return [
            'summarized_documents' => 184000,
            'summarization_accuracy' => '99.80%',
            'key_takeaways_generated' => 1420000,
            'status' => 'AUTO_SUMMARIES_ACTIVE'
        ];
    }
}
