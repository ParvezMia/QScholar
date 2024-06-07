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
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Status</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($data as $item)
                            <tr>
                                <td class="text-left py-3 px-4">{{ $item->scholarship->scholarship_name }}</td>
                                <td class="text-left py-3 px-4">{{ $item->scholarship->organization->org_name }}</td>
                                <td class="text-left py-3 px-4">
                                    ${{ number_format($item->scholarship->scholarship_amount, 2) }}</td>
                                <td class="text-left py-3 px-4">
                                    {{ $item->scholarship->scholarship_application_deadline->format('Y-m-d') }}</td>
                                <td class="text-left py-3 px-4">{!! Str::limit($item->scholarship->scholarship_description, 50) !!}</td>

                                <td class="text-left py-3 px-4 ">{{ $item->status }}</td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
