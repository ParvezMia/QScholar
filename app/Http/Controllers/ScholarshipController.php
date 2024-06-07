<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use App\Models\Organization;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ScholarshipController extends Controller
{
    //
    public function index()
    {
        $scholarships = Scholarship::with('organization')->paginate(10);
        return view('admin.scholarship.index', compact('scholarships'));
    }


    public function create()
    {
        $organizations = Organization::all();
        return view('admin.scholarship.create', compact('organizations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'scholarship_name' => 'required|string|max:255',
            'scholarship_organization_id' => 'required|exists:organizations,id',
            'scholarship_description' => 'nullable|string',
            'scholarship_amount' => 'required|numeric|min:0',
            'scholarship_application_deadline' => 'required|date',
            'scholarship_eligibility_criteria' => 'nullable|string',
        ]);
        Scholarship::create([
            'scholarship_organization_id' => $request->scholarship_organization_id,
            'scholarship_name' => $request->scholarship_name,
            'scholarship_description' => $request->scholarship_description,
            'scholarship_amount' => $request->scholarship_amount,
            'scholarship_application_deadline' => $request->scholarship_application_deadline,
            'scholarship_eligibility_criteria' => $request->scholarship_eligibility_criteria,
        ]);

        return redirect()->route('scholarships.index')->with('success', 'Scholarship created successfully.');
    }


    public function edit(Scholarship $scholarship)
    {
        $organizations = Organization::all();
        $scholarship->scholarship_application_deadline = Carbon::parse($scholarship->scholarship_application_deadline)->format('m/d/Y');
        return view('admin.scholarship.edit', compact('scholarship', 'organizations'));
    }

    // Method to update the scholarship
    public function update(Request $request, Scholarship $scholarship)
    {
        $request->validate([
            'scholarship_name' => 'required|string|max:255',
            'scholarship_organization_id' => 'required|exists:organizations,id',
            'scholarship_description' => 'required|string',
            'scholarship_amount' => 'required|numeric|min:0',
            'scholarship_application_deadline' => 'required|date',
            'scholarship_eligibility_criteria' => 'nullable|string',
        ]);


        $scholarship->update([
            'scholarship_organization_id' => $request->scholarship_organization_id,
            'scholarship_name' => $request->scholarship_name,
            'scholarship_description' => $request->scholarship_description,
            'scholarship_amount' => $request->scholarship_amount,
            'scholarship_application_deadline' => $request->scholarship_application_deadline,
            'scholarship_eligibility_criteria' => $request->scholarship_eligibility_criteria,
        ]);

        return redirect()->route('scholarships.index')->with('success', 'Scholarship updated successfully.');
    }

}
