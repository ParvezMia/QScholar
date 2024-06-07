<x-app-layout>
    <div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
        <!-- title -->
        <h1 class="text-xl text-white">Add Student</h1>
    </div>
    <div class="-mt-12 mx-6 mb-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-1 xl:grid-cols-1">
        <!-- card -->
        <div class="card shadow">
            <!-- card body -->
            <div class="card-body">
                <!-- content -->
                <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="grid lg:grid-cols-2 gap-6">
                        <div class="py-3">
                            <label for="student_first_name" class="mb-2 block text-gray-800">First Name</label>
                            <input type="text" id="student_first_name" name="student_first_name"
                                class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3"
                                placeholder="First Name" value="{{ old('student_first_name') }}" />
                            @error('student_first_name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="py-3">
                            <label for="student_last_name" class="mb-2 block text-gray-800">Last Name</label>
                            <input type="text" id="student_last_name" name="student_last_name"
                                class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3"
                                placeholder="Last Name" value="{{ old('student_last_name') }}" />
                            @error('student_last_name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="py-3">
                        <label for="student_email" class="mb-2 block text-gray-800">Student Email</label>
                        <input type="email" id="student_email" name="student_email"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3"
                            placeholder="Student Email" value="{{ old('student_email') }}" />
                        @error('student_email')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grid lg:grid-cols-2 gap-6">
                        <div class="py-3">
                            <label for="student_education_level" class="mb-2 block text-gray-800">Education
                                Level</label>
                            <select id="student_education_level" name="student_education_level"
                                class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3">
                                <option value="highschool">High School</option>
                                <option value="college">College</option>
                                <option value="university">University</option>
                            </select>
                            @error('student_education_level')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="py-3">
                            <label for="student_last_degree" class="mb-2 block text-gray-800">Last Degree</label>
                            <select id="student_last_degree" name="student_last_degree"
                                class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3">
                                <option value="highschool">High School</option>
                                <option value="college">College</option>
                                <option value="university">University</option>
                            </select>
                            @error('student_last_degree')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="py-3">
                        <label for="student_contact_number" class="mb-2 block text-gray-800">Contact Number</label>
                        <input type="text" id="student_contact_number" name="student_contact_number"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3"
                            placeholder="Contact Number" value="{{ old('student_contact_number') }}" />
                        @error('student_contact_number')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="py-3">
                        <label for="student_address" class="mb-2 block text-gray-800">Address</label>
                        <textarea id="student_address" name="student_address"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3"
                            placeholder="student_address">{{ old('student_address') }}</textarea>
                        @error('student_address')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="py-3">
                        <label for="student_degree_file" class="mb-2 block text-gray-800">Degree File</label>
                        <input type="file" id="student_degree_file" name="student_degree_file"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3" />
                        @error('student_degree_file')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="py-3">
                        <label for="student_image" class="mb-2 block text-gray-800">Image</label>
                        <input type="file" id="student_image" name="student_image"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3" />
                        @error('student_image')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="py-3 mt-5">
                        <button type="submit"
                            class="bg-indigo-600 text-white rounded py-2 px-4 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-500">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
