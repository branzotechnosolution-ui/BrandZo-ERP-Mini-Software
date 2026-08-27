<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandZoPublicWebsiteController extends Controller
{
    public function home()
    {
        return response('<html><head><title>BrandZo AI Enterprise OS - Official Public Launch</title></head><body style="font-family:sans-serif;padding:40px;"><h1>Welcome to BrandZo AI Enterprise Operating System 🌐🚀🤖</h1><p>The World\'s Most Advanced Autonomous AI Enterprise Operating System (140 AI Subsystems Live).</p><p><a href="/signin">Sign In to Enterprise Portal</a> | <a href="/pricing">View Enterprise Pricing</a> | <a href="/documentation">Documentation Portal</a></p></body></html>');
    }

    public function page($pageName = 'home')
    {
        $pageTitle = ucfirst($pageName) . ' - BrandZo AI Enterprise Operating System';
        return response("<html><head><title>{$pageTitle}</title></head><body style=\"font-family:sans-serif;padding:40px;\"><h1>BrandZo AI Enterprise OS - {$pageTitle}</h1><p>Multimodal Autonomous Enterprise OS Capabilities Active across 140 Subsystems.</p><p><a href=\"/\">← Back to Home</a></p></body></html>");
    }
}
