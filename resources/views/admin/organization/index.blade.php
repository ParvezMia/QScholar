<x-app-layout>
    <div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
        <!-- title -->
        <h1 class="text-xl text-white">Add Organization</h1>
    </div>
    <div class="-mt-12 mx-6 mb-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-1 xl:grid-cols-1">
        <!-- card -->
        <div class="card shadow">
            <!-- card body -->
            <div class="card-body">
                <!-- content -->
                <table class=" bg-white shadow-md rounded-lg overflow-hidden w-full">
                    <thead class="bg-indigo-600">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Image</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Name</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Email</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Website</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Contact Number
                            </th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Address</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($organizations as $organization)
                            <tr>
                                <td class="text-left py-3 px-4">
                                    @if ($organization->org_image)
                                        <img src="{{ asset($organization->org_image) }}" alt="Image"
                                            class="w-16 h-16 rounded">
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td class="text-left py-3 px-4">{{ $organization->org_name }}</td>
                                <td class="text-left py-3 px-4">{{ $organization->org_email }}</td>
                                <td class="text-left py-3 px-4"><a href="{{ $organization->org_website }}"
                                        __blank>{{ $organization->org_website }}</a></td>
                                <td class="text-left py-3 px-4">{{ $organization->org_contact_number }}</td>
                                <td class="text-left py-3 px-4">{{ $organization->org_address }}</td>

                                <td class="text-left py-3 px-4 flex gap-6">
                                    <!-- Actions (Edit/Delete) -->
                                    <a href="{{ route('organizations.edit', $organization->id) }}"
                                        class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <form method="POST"
                                        action="{{ route('organizations.destroy', $organization->id) }}">

                                        @csrf

                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="text-red-600 hover:text-red-900 ml-2 show_confirm"
                                            data-toggle="tooltip" title='Delete'>Delete</button>
                                    </form>
                                    {{-- <form action="{{ route('organizations.destroy', $organization->id) }}"
                                        method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="mt-6">
        {{ $organizations->links() }}
    </div>
</x-app-layout>
