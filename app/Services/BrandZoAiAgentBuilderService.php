<?php

namespace App\Services;

class BrandZoAiAgentBuilderService
{
    public static function createCustomAgent($data)
    {
        return [
            'status' => 'Created',
            'name' => $data['name'] ?? 'BrandZo Sales Bot',
            'department' => $data['department'] ?? 'Sales',
            'skills' => $data['skills'] ?? ['Lead Follow-up', 'Email Writing', 'WhatsApp Communication', 'CRM Update'],
            'created_at' => now()->toIso8601String()
        ];
    }
}
