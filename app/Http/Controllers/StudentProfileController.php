<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentProfileController extends Controller
{
    //

    public function index(){
        //get organization baed on cuirrent logged in email
        $email = auth()->user()->email;
        return view('admin.student-profile.profile.create', compact('email'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'student_first_name' => 'required|string|max:255',
            'student_last_name' => 'required|string|max:255',
            'student_email' => 'required|string|email|max:255',
            'student_education_level' => 'required|in:highschool,college,university',
            'student_last_degree' => 'required|in:highschool,college,university',
            'student_degree_file' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'student_contact_number' => 'required|string|max:20',
            'student_address' => 'required|string|max:500',
            'student_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            // Notify the user of validation errors
            return redirect()->route('student.profile.index')
                ->withInput()
                ->withErrors($validator);
        }

        // Handle file uploads
        $degreeFilePath = '';
        if ($request->hasFile('student_degree_file')) {
            $fileName = time().'.'.$request->file('student_degree_file')->getClientOriginalExtension();
            $degreeFilePath = $request->file('student_degree_file')->storeAs('degrees', $fileName, 'public');
        }

        $studentImage = '';
        if ($request->hasFile('student_image')) {
            $fileName = time().'.'.$request->file('student_image')->getClientOriginalExtension();
            $studentImage = $request->file('student_image')->storeAs('images', $fileName, 'public');
        }

        // Create the student
        $student = new Student();
        $student->student_first_name = $request->input('student_first_name');
        $student->student_last_name = $request->input('student_last_name');
        $student->student_email = $request->input('student_email');
        $student->student_education_level = $request->input('student_education_level');
        $student->student_last_degree = $request->input('student_last_degree');
        $student->student_degree_file_path = $degreeFilePath;
        $student->student_contact_number = $request->input('student_contact_number');
        $student->student_address = $request->input('student_address');
        $student->student_image = $studentImage;
        $student->save();

        flash()->success('Student created successfully!');

        // Redirect to a specific route with a success message
        return redirect()->route('student.profile.index')->with('success', 'Student created successfully.');
    }
}
