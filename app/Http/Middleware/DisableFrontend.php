<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DisableFrontend
{
    public function handle(Request $request, Closure $next)
    {
        try {
            if (function_exists('global_setting') && optional(global_setting())->frontend_disable) {
                return redirect(route('login'));
            }
        } catch (\Throwable $e) {
            // Fallthrough
        }

        return $next($request);
    }
}
