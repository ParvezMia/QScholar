<x-app-layout>
    <div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
        <!-- title -->
        <h1 class="text-xl text-white">Scholarships</h1>
    </div>
    <div class="-mt-12 mx-6 mb-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-1 xl:grid-cols-1">
        <!-- card -->
        <div class="card shadow">
            <!-- card body -->
            <div class="card-body">
                <!-- content -->
                <table class="bg-white shadow-md rounded-lg overflow-hidden w-full">
                    <thead class="bg-indigo-600">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Scholarship name
                            </th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Applicant Name
                            </th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Email</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Phone</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Date of Birth
                            </th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Address</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Education Level
                            </th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">GPA</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Essay</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Extracurricular
                            </th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">References</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">File Path</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($data as $item)
                            <tr>
                                <td class="text-left py-3 px-4">{{ $item->scholarship->scholarship_name }}</td>
                                <td class="text-left py-3 px-4">{{ $item->applicant_name }}</td>
                                <td class="text-left py-3 px-4">{{ $item->email }}</td>
                                <td class="text-left py-3 px-4">{{ $item->phone }}</td>
                                <td class="text-left py-3 px-4">{{ $item->dob }}</td>
                                <td class="text-left py-3 px-4">{{ $item->address }}</td>
                                <td class="text-left py-3 px-4">{{ $item->education_level }}</td>
                                <td class="text-left py-3 px-4">{{ $item->gpa }}</td>
                                <td class="text-left py-3 px-4">{{ $item->essay }}</td>
                                <td class="text-left py-3 px-4">{{ $item->extra_curricular }}</td>
                                <td class="text-left py-3 px-4">{{ $item->references }}</td>
                                <td class="text-left py-3 px-4">
                                    <a href="{{ asset($item->file_path) }}" download>Download File</a>
                                </td>
                                <td class="text-left py-3 px-4">
                                    @if ($item->status == 'pending')
                                        <form action="{{ route('scholarship.application.accept', $item->id) }}"
                                            method="post">
                                            @csrf
                                            <button class="text-indigo-600 hover:text-indigo-900">
                                                Accept
                                            </button>
                                        </form>
                                        <form action="{{ route('scholarship.application.reject', $item->id) }}"
                                            method="post">
                                            @csrf
                                            <button class="text-indigo-600 hover:text-indigo-900">
                                                Reject
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
