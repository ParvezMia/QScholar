<x-app-layout>
    <div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
        <!-- title -->
        <h1 class="text-xl text-white">Contact Form Submissions</h1>
    </div>
    <div class="-mt-12 mx-6 mb-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-1 xl:grid-cols-1">
        <!-- card -->
        <div class="card shadow">
            <!-- card body -->
            <div class="card-body">
                <!-- content -->
                <table class="bg-white shadow-md rounded-lg overflow-hidden w-full">
                    <thead class="bg-indigo-600 text-white">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Age</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone Number</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Message</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($contacts as $contact)
                            <tr>
                                <td class="text-left py-3 px-4">{{ $contact->name }}</td>
                                <td class="text-left py-3 px-4">{{ $contact->email }}</td>
                                <td class="text-left py-3 px-4">{{ $contact->age }}</td>
                                <td class="text-left py-3 px-4">{{ $contact->phone_number }}</td>
                                <td class="text-left py-3 px-4">{{ $contact->message }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
