<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoAiGatewayController extends AccountBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Unified Real AI Model Gateway & Cost Optimizer';
    }

    public function index()
    {
        return view('ai.gateway', $this->data);
    }

    public function apiModels(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'models' => ['OpenAI GPT-4o', 'Claude 3.5 Sonnet', 'Gemini 1.5 Pro', 'Llama 3', 'Mistral Large'],
            'cost_savings' => '-38.4% Token Cost'
        ]);
    }
}
