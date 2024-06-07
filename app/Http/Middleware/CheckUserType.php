<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserType
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Determine the correct route based on user type
            switch ($user->user_type) {
                case 'admin':
                    if (!$request->routeIs('admin.dashboard')) {
                        return redirect()->route('admin.dashboard');
                    }
                    break;
                case 'organization':
                    if (!$request->routeIs('organization.*')) {
                        return redirect()->route('organization.dashboard');
                    }
                    break;
                case 'student':
                    if (!$request->routeIs('student.*')) {
                        return redirect()->route('student.dashboard');
                    }
                    break;
                default:
                    return redirect('/');
            }
        } else {
            return redirect('/login');
        }

        return $next($request);
    }
}
