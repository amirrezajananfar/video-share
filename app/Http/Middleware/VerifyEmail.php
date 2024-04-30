<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->hasVerifiedEmail()) {
            return $next($request);
        }

        return redirect()->route('index')->with('error', 'برای استفاده از تمامی امکانات سایت لطفا ایمیل خود را تایید فرمایید.');
    }
}
