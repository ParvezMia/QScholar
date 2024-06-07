<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Scholarship;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationProfileController extends Controller
{
    //
    public function index(){
        //get organization baed on cuirrent logged in email
        $email = auth()->user()->email;
        return view('admin.organization-profile.create', compact('email'));
    }

    public function scholarshipList(){
        //get organization baed on cuirrent logged in email
        $id = auth()->user()->id;
        $scholarships = Scholarship::where('created_by', $id)->with('organization')->paginate(10);
        return view('admin.organization-profile.scholarship-list', compact('scholarships'));
    }

    public function scholarshipCreate()
    {
        $email = auth()->user()->email;
        $organizations = Organization::where('org_email', $email)->get();
        return view('admin.organization-profile.scholarship.create', compact('organizations'));
    }

    public function scholarshipStore(Request $request)
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

        return redirect()->route('scholarships.profile.list')->with('success', 'Scholarship created successfully.');
    }

    public function scholarshipEdit(Scholarship $scholarship)
    {
        $email = auth()->user()->email;
        $organizations = Organization::where('org_email', $email)->get();
        $scholarship->scholarship_application_deadline = Carbon::parse($scholarship->scholarship_application_deadline)->format('m/d/Y');
        return view('admin.organization-profile.scholarship.edit', compact('scholarship', 'organizations'));
    }

    public function scholarshipUpdate(Request $request, Scholarship $scholarship)
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

        return redirect()->route('scholarships.profile.list')->with('success', 'Scholarship updated successfully.');
    }

    public function scholarshipDelete(Scholarship $scholarship)
    {
        $scholarship->delete();
        return redirect()->route('scholarships.profile.list')->with('success', 'Organization deleted successfully.');
    }

}
