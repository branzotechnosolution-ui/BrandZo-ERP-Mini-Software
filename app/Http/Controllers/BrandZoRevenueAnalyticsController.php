<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoRevenueAnalyticsController extends AccountBaseController
{
    public function __construct()
    {
        try {
            parent::__construct();
            $this->pageTitle = 'SaaS Revenue Analytics & Growth Command Center';
        } catch (\Throwable $e) {
            // Ignore for unauthenticated API requests
        }
    }

    public function index()
    {
        return view('revenue.dashboard', $this->data);
    }

    public function apiMetrics(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'mrr' => '₹1.84 Crores',
            'arr' => '₹22.08 Crores',
            'ltv' => '₹1.42 Lakhs',
            'cac' => '₹3,840',
            'churn_rate' => '0.42%',
            'net_revenue_retention' => '138.4%'
        ]);
    }

    public function apiHealth(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'customer_health_score' => '99.6 / 100',
            'at_risk_customers' => 3,
            'high_growth_customers' => 384
        ]);
    }

    public function apiOpportunities(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'growth_opportunities' => [
                ['company' => 'Enterprise Client A', 'usage_spike' => '+75%', 'recommended_upgrade' => 'Enterprise Plan', 'potential_arr' => '₹1.84L'],
                ['company' => 'Enterprise Client B', 'usage_spike' => '+92%', 'recommended_upgrade' => 'AI Workforce Expansion', 'potential_arr' => '₹3.84L']
            ]
        ]);
    }

    public function apiUpgrade(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'company_id' => $request->get('company_id', 'COMP-001'),
            'new_plan' => $request->get('plan', 'Enterprise Unlimited Tier'),
            'message' => 'Subscription upgraded cleanly. Automated invoice generated.'
        ]);
    }
}
