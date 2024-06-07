<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Scholarship;
use App\Models\Organization;
use Illuminate\Http\Request;
use App\Models\ScholarshipApplication;

class AdminController extends Controller
{
    //

    public function index() {
        $scholarship = Scholarship::all();
        //get scholarship, organizations, students, applicants
        $organizations = Organization::all();
        $students = Student::all();
        $applicants = ScholarshipApplication::all();
        return view('dashboard', compact('scholarship', 'organizations','students', 'applicants',));
    }
}
