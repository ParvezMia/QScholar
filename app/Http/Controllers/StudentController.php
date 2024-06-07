<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the students.
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $students = Student::paginate(10);
        return view('admin.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new student.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.students.create');
    }

   /**
     * Store a newly created students in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
            return redirect()->route('students.create')
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
        return redirect()->route('students.create')->with('success', 'Student created successfully.');
    }

    public function edit(Student $students)
    {

        return view('admin.students.edit', compact('students'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'student_first_name' => 'required|string|max:255',
            'student_last_name' => 'required|string|max:255',
            'student_email' => 'required|string|email|max:255',
            'student_education_level' => 'required|in:highschool,college,university',
            'student_last_degree' => 'required|in:highschool,college,university',
            'student_degree_file' => 'nullable|file',
            'student_contact_number' => 'nullable|string|max:20',
            'student_address' => 'nullable|string|max:500',
            'student_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('students.edit', $id)
                ->withInput()
                ->withErrors($validator);
        }

        // Find the student
        $student = Student::findOrFail($id);

        // Handle file uploads
        if ($request->hasFile('student_degree_file')) {
            $degreeFilePath = $request->file('student_degree_file')->store('degrees');
            $student->student_degree_file_path = $degreeFilePath;
        }
        if ($request->hasFile('student_image')) {
            $studentImage = $request->file('student_image')->store('images');
            $student->student_image = $studentImage;
        }

        // Update student details
        $student->student_first_name = $request->student_first_name;
        $student->student_last_name = $request->student_last_name;
        $student->student_email = $request->student_email;
        $student->student_education_level = $request->student_education_level;
        $student->student_last_degree = $request->student_last_degree;
        $student->student_contact_number = $request->student_contact_number;
        $student->student_address = $request->student_address;
        $student->updated_by = auth()->id();
        $student->save();

        flash()->success('Student updated successfully!');

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }


    public function destroy(Student $students)
    {
        $students->delete();
        return redirect()->route('students.index')->with('success', 'Organization deleted successfully.');
    }
}
