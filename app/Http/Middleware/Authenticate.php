<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    // protected function redirectTo(Request $request): ?string
    // {
    //     return $request->expectsJson() ? null : route('login');
    // }

    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {
            $guard = $this->getGuard($request);
            switch ($guard) {
                case 'admin':
                    return route('admin.login');
                    break;
                default:
                    return route('dashboard');
                    break;
            }
            return route('dashboard');
        }
        return null; // Return null if the request expects JSON
    }
    protected function getGuard(Request $request)
    {
        if ($request->is('admin/*')) {
            return 'admin';
        }

        if ($request->is('api/*')) {
            abort(response()->json(['status'=>false,'error' => 'Unauthenticated.'], 401));
        }

        return 'user';
    }
}
