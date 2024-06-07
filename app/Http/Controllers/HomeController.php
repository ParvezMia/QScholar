<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Scholarship;
use App\Models\Organization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ScholarshipApplication;

class HomeController extends Controller
{
    //
    public function index()
    {
        $scholarship = \App\Models\Scholarship::with('organization')->latest()->get();
        //get organization limit 3
        $organizations = \App\Models\Organization::latest()->limit(3)->get();

        $blogs = Blog::latest()->limit(3)->get();
        return view('frontned.index', compact('scholarship', 'organizations', 'blogs'));
    }


    public function scholarshipDetails(Scholarship $scholarship)
    {
        $scholarship->load('organization');
        return view('frontned.scholarship-details', compact('scholarship'));
    }

    public function organizationDetails(Organization $organization)
    {
        $organization->load('scholarships');
        return view('frontned.organization-details', compact('organization'));
    }

    public function scholarshipList()
    {
        $scholarships = Scholarship::with('organization')->latest()->paginate(6);

        return view('frontned.scholarship-list', compact('scholarships'));
    }

    public function organizationList()
    {
        $organizations = Organization::with('scholarships')->latest()->paginate(6);
        return view('frontned.organization-list', compact('organizations'));
    }


    public function scholarshipApply(Scholarship $scholarship)
    {
        return view('frontned.scholarship-apply', compact('scholarship'));
    }

    public function scholarshipApplyPost(Request $request)
    {
        $request->validate([
            'scholarship_id' => 'required|exists:scholarships,id',
            'applicant_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'dob' => 'required|date',
            'address' => 'required|string',
            'education_level' => 'required|string',
            'gpa' => 'required|string|max:4',
            'essay' => 'required|string',
            'extra_curricular' => 'required|string',
            'references' => 'required|string',
            'file' => 'required|file|mimes:pdf,doc,docx',
        ]);


        $scholarship = Scholarship::find($request->scholarship_id);

        $application = new ScholarshipApplication();
        $application->scholarship_id = $scholarship->id;
        $application->applicant_name = $request->applicant_name;
        $application->email = $request->email;
        $application->phone = $request->phone;
        $application->dob = $request->dob;
        $application->address = $request->address;
        $application->education_level = $request->education_level;
        $application->gpa = $request->gpa;
        $application->essay = $request->essay;
        $application->extra_curricular = $request->extra_curricular;
        $application->references = $request->references;

        $filePath = $request->file('file')->store('applications', 'public');
        $application->file_path = $filePath;

        $application->save();

        return redirect()->route('scholar.details', $scholarship->id)->with('success', 'Application submitted successfully.');
    }

    public function aboutUs()
    {
        return view('frontned.about-us');
    }


    public function blogShow($id)
    {
        $blog = Blog::findOrFail($id);
        return view('frontned.blog-show', compact('blog'));
    }
    public function blogList()
    {
        $blogs = Blog::latest()->paginate(6);
        return view('frontned.blog-list', compact('blogs'));
    }
}
