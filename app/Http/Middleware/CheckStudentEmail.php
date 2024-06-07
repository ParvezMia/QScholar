<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class CheckStudentEmail
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if (!Student::where('student_email', $user->email)->exists()) {
            // User's email exists in students table
            session()->flash('notification', 'You have not registered as an student. Please update your profile.');
        }

        // User's email does not exist in students table
        // Redirect or show notifications here
        return $next($request);
    }
}
