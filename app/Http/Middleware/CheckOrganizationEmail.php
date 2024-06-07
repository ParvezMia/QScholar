<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Organization;

class CheckOrganizationEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            $user = Auth::user();

            // Check if the user's email exists in the org_email column
            if (!Organization::where('org_email', $user->email)->exists()) {
                // Add a notification to inform the user
                session()->flash('notification', 'You have not registered as an organization. Please update your profile.');
            }
        }

        return $next($request);
    }
}
