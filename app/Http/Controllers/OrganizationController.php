<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::paginate(10); // Display 10 organizations per page
        return view('admin.organization.index', compact('organizations'));
    }


    public function create()
    {
        return view('admin.organization.create');
    }

   /**
     * Store a newly created organization in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:organizations,org_email',
            'website' => 'nullable|url|max:255',
            'contact_number' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if ($validator->fails()) {
            // Notify the user of validation errors
            return redirect()->route('organization.create')
                ->withInput()
                ->withErrors($validator);
        }

        $photo = '';

        if ($request->hasFile('image')) {
            $fileName = time().'.'.$request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('images', $fileName, 'public');
            $photo = '/storage/'.$path;
        }
        // Create a new organization
        $org = new Organization();
        $org->org_name = $request->name;
        $org->org_email = $request->email;
        $org->org_website = $request->website;
        $org->org_contact_number = $request->contact_number;
        $org->org_address = $request->address;
        $org->org_image = $photo;
        $org->save();

        flash()->success('Organization created successfully!');

        // Redirect to a specific route with a success message
        return redirect()->route('organization.create')->with('success', 'Organization created successfully.');
    }

    public function edit(Organization $organization)
    {

        return view('admin.organization.edit', compact('organization'));
    }

    public function update(Request $request, Organization $organization)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|string|email',
            'website' => 'nullable',
            'contact_number' => 'required',
            'address' => 'required|string',
            'image' => 'nullable|image',
        ]);

        if ($validator->fails()) {
            return redirect()->route('organizations.edit', $organization->id)
                ->withInput()
                ->withErrors($validator);
        }

        // Handle image upload
        $photo = $organization->org_image;
        if ($request->hasFile('image')) {
            $fileName = time() . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $fileName, 'public');
            $photo = '/storage/' . $path;
        }

        // Update the organization
        $organization->org_name = $request->name;
        $organization->org_email = $request->email;
        $organization->org_website = $request->website;
        $organization->org_contact_number = $request->contact_number;
        $organization->org_address = $request->address;
        $organization->org_image = $photo;
        $organization->save();

        flash()->success('Organization updated successfully!');
        // Redirect with a success message
        return redirect()->route('organizations.index')->with('success', 'Organization updated successfully.');
    }

    public function destroy(Organization $organization)
    {
        $organization->delete();
        return redirect()->route('organizations.index')->with('success', 'Organization deleted successfully.');
    }
}
