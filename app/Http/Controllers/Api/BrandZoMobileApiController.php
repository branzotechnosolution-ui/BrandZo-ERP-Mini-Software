<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandZoMobileApiController extends Controller
{
    public function login(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'token' => 'mobile-token-' . uniqid(),
            'user' => [
                'name' => 'Enterprise Admin',
                'email' => $request->input('email', 'admin@brandzo.in'),
                'role' => 'Administrator'
            ]
        ]);
    }

    public function dashboard()
    {
        return response()->json([
            'connected_enterprises' => 84500,
            'ai_workforce' => 520000,
            'monthly_recurring_revenue' => ',480,000',
            'system_health' => '99.999%'
        ]);
    }

    public function crmLeads()
    {
        return response()->json([
            ['id' => 1, 'company' => 'Acme Global', 'status' => 'Qualified', 'value' => ',000'],
            ['id' => 2, 'company' => 'TechCorp Int', 'status' => 'Proposal Sent', 'value' => ',000']
        ]);
    }

    public function hrmsEmployees()
    {
        return response()->json([
            ['id' => 101, 'name' => 'BrandZo AI Sales Bot', 'department' => 'Sales', 'type' => 'AI Agent'],
            ['id' => 102, 'name' => 'BrandZo AI Support Specialist', 'department' => 'Customer Success', 'type' => 'AI Agent']
        ]);
    }

    public function financeInvoices()
    {
        return response()->json([
            ['invoice_no' => 'INV-2026-001', 'amount' => ',999.00', 'status' => 'Paid'],
            ['invoice_no' => 'INV-2026-002', 'amount' => ',999.00', 'status' => 'Pending']
        ]);
    }

    public function aiAssistant(Request $request)
    {
        return response()->json([
            'response' => 'Mobile AI Executive Assistant: Your enterprise revenue forecast is trending +24% for Q3.'
        ]);
    }

    public function pushNotifications(Request $request)
    {
        return response()->json([
            'status' => 'Notification Sent',
            'device_count' => 1420
        ]);
    }
}
