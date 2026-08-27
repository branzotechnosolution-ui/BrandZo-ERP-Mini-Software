<?php

namespace App\Services;

class BrandZoTrainingAcademyService
{
    public static function getTrainingAcademyMetrics()
    {
        return [
            'certified_courses' => 384,
            'enrolled_learners' => 520000,
            'training_completion_rate' => '98.40%',
            'status' => 'TRAINING_ACADEMY_PEAK'
        ];
    }
}
