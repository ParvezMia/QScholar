<x-app-layout>
    <div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
        <!-- title -->
        <h1 class="text-xl text-white">Students List</h1>
    </div>
    <div class="-mt-12 mx-6 mb-6">
        <div class="card shadow">
            <div class="card-body">
                <table class="bg-white shadow-md rounded-lg overflow-hidden w-full">
                    <thead class="bg-indigo-600">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">First Name</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Last Name</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Education Level
                            </th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Last Degree</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Last Degree File
                            </th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Contact Number
                            </th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Address</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Status</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($students as $student)
                            <tr>
                                <td class="text-left py-3 px-4">{{ $student->student_first_name }}</td>
                                <td class="text-left py-3 px-4">{{ $student->student_last_name }}</td>
                                <td class="text-left py-3 px-4">{{ $student->student_education_level }}</td>
                                <td class="text-left py-3 px-4">{{ $student->student_last_degree }}</td>
                                <td class="text-left py-3 px-4">
                                    @if ($student->student_degree_file_path)
                                        <a href="{{ asset($student->student_degree_file_path) }}" target="_blank">View
                                            File</a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td class="text-left py-3 px-4">{{ $student->student_contact_number }}</td>
                                <td class="text-left py-3 px-4">{{ $student->student_address }}</td>
                                <td class="text-left py-3 px-4">
                                    {!! $student->students_actived
                                        ? '<span class="bg-teal-500 px-2 py-1 text-white text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Activated</span>'
                                        : '<span class="bg-red-500 px-2 py-1 text-white text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Deactivated</span>' !!}


                                </td>
                                <td class="text-left py-3 px-4 flex gap-6">
                                    <!-- Actions (Edit/Delete) -->
                                    <a href="{{ route('students.edit', $student->id) }}"
                                        class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <form method="POST" action="{{ route('students.destroy', $student->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 ml-2 show_confirm"
                                            data-toggle="tooltip" title='Delete'>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="mt-6">
        {{ $students->links() }}
    </div>
</x-app-layout>
