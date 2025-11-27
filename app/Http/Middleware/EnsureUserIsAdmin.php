<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        // Check User is Authenticated
        if (!$user) {
            return $request->expectsJson()
                ? response()->json(['message' => 'Unauthenticated.'], 401)
                : redirect()->route('login');
        }

        // Check User is Admin
        if (!($user->is_admin ?? false)) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Forbidden'], 403);
            }

            return response()->view('errors.403', [], 403);
        }

        return $next($request);
    }
}
