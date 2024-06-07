<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentScholarshipController extends Controller
{
    //
    public function index()
    {
        $userId = auth()->user()->id;

        // Fetch scholarship applications with related organization information
        $data = \App\Models\ScholarshipApplication::where('created_by', $userId)
            ->with(['scholarship', 'scholarship.organization'])
            ->get();

        return view('admin.student-scholarship-list.index', compact('data'));
    }

}
