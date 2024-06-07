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
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Name</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Organization</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Amount</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Deadline</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Description</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($scholarships as $scholarship)
                            <tr>
                                <td class="text-left py-3 px-4">{{ $scholarship->scholarship_name }}</td>
                                <td class="text-left py-3 px-4">{{ $scholarship->organization->org_name }}</td>
                                <td class="text-left py-3 px-4">
                                    ${{ number_format($scholarship->scholarship_amount, 2) }}</td>
                                <td class="text-left py-3 px-4">
                                    {{ $scholarship->scholarship_application_deadline->format('Y-m-d') }}</td>
                                <td class="text-left py-3 px-4">
                                    {!! Str::limit($scholarship->scholarship_description, 50) !!}</td>
                                <td class="text-left py-3 px-4 flex gap-6">
                                    <!-- Actions (Edit/Delete) -->
                                    <a href="{{ route('scholarships.edit', $scholarship->id) }}"
                                        class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <form method="POST" action="{{ route('scholarships.destroy', $scholarship->id) }}">
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
        {{ $scholarships->links() }}
    </div>
</x-app-layout>
