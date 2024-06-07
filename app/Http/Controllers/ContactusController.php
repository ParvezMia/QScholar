<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    //

    public function index()
    {
        return view('frontned.contact-us');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'stud-name' => 'required',
            'stud-mail' => 'required|email',
            'stud-age' => 'required|integer',
            'stud-number' => 'required',
            'stud-message' => 'required',
        ]);

        // Create a new contact form entry
        ContactForm::create([
            'name' => $request->input('stud-name'),
            'email' => $request->input('stud-mail'),
            'age' => $request->input('stud-age'),
            'phone_number' => $request->input('stud-number'),
            'message' => $request->input('stud-message'),
        ]);

        // Redirect back with a success message or any other response
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }

    public function dashboardContact()
    {
        $contacts = ContactForm::all();
        return view('admin.contact-us.index', compact('contacts'));
    }
}
