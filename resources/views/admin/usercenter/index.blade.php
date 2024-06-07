<x-app-layout>
    <div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
        <!-- title -->
        <h1 class="text-xl text-white">User Types</h1>
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
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">User Types</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($userTypes as $userType)
                            <tr>
                                <td class="text-left py-3 px-4">{{ $userType->name }}</td>
                                <td class="text-left py-3 px-4">{{ $userType->user_type }}</td>
                                <td class="text-left py-3 px-4 flex gap-6">
                                    <!-- Actions (Edit/Delete) -->
                                    <form method="POST" action="{{ route('usercenter.destroy', $userType->id) }}">
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
        {{-- {{ $userTypes->links() }} --}}
    </div>
</x-app-layout>
