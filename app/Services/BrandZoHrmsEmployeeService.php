<?php

namespace App\Services;

class BrandZoHrmsEmployeeService
{
    public static function getEmployeeMetrics()
    {
        return [
            'total_employees' => 184,
            'active_departments' => 8,
            'full_time_count' => 162,
            'contract_count' => 22,
            'departments' => ['Engineering & AI', 'Sales & CRM', 'Marketing', 'Finance', 'HR & Admin', 'Customer Success'],
            'status' => 'HRMS_EMPLOYEE_MODULE_ACTIVE'
        ];
    }

    public static function createEmployee($fullName, $email, $department, $designation, $salary = 75000)
    {
        $code = 'EMP-2026-' . rand(1000, 9999);
        return [
            'status' => 'success',
            'employee_code' => $code,
            'full_name' => $fullName,
            'email' => $email,
            'department' => $department,
            'designation' => $designation,
            'joining_date' => date('Y-m-d'),
            'monthly_salary' => $salary,
            'message' => 'New Employee profile registered cleanly in HRMS System.'
        ];
    }
}
