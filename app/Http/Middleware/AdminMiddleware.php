<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            if ($request->expectsJson() || $request->is('api/*')) {
                return response()->json([
                    'success' => false,
                    'message' => 'Please login to access this resource.'
                ], 401);
            }
            return redirect()->route('login')->with('error', 'Please login to access this page.');
        }

        // Check if user is admin
        if (!Auth::user()->is_admin) {
            if ($request->expectsJson() || $request->is('api/*')) {
                return response()->json([
                    'success' => false,
                    'message' => 'You do not have permission to access this resource.'
                ], 403);
            }
            return redirect('/')->with('error', 'You do not have permission to access the admin area.');
        }

        return $next($request);
    }
}
