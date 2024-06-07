<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScholarshipApplication;

class ScholarshipApplicationController extends Controller
{
    //
    public function index()
    {
        $data = ScholarshipApplication::with(['scholarship', 'organization'])->get();
        return view('admin.scholarship-application-list.index', compact('data'));
    }

    public function accept($id)
    {
        $application = ScholarshipApplication::findOrFail($id);

        // Perform any acceptance logic here (e.g., updating status)
        $application->update(['status' => 'accepted']);
        return redirect()->back()->with('success', 'Scholarship application accepted successfully.');
    }

    public function reject($id)
    {
        $application = ScholarshipApplication::findOrFail($id);

        // Perform any acceptance logic here (e.g., updating status)
        $application->update(['status' => 'rejected']);
        return redirect()->back()->with('success', 'Scholarship application rejected successfully.');
    }
}
