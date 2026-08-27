<?php

namespace App\Services;

class BrandZoEducationService
{
    public static function getAcademySummary()
    {
        return [
            'enrolled_students' => 3850,
            'active_faculty' => 140,
            'fee_collection_rate' => '92.5%',
            'certificates_issued' => 420
        ];
    }
}
