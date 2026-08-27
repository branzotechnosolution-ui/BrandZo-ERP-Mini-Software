<?php

namespace App\Services;

class BrandZoHealthcareService
{
    public static function getPatientSummary()
    {
        return [
            'total_patients' => 1420,
            'active_appointments' => 38,
            'doctors_on_duty' => 12,
            'claims_pending' => 15
        ];
    }
}
