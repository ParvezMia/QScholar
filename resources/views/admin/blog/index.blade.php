<x-app-layout>
    <div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
        <h1 class="text-xl text-white">Blogs</h1>
    </div>
    <div class="-mt-12 mx-6 mb-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-1 xl:grid-cols-1">
        <div class="card shadow">
            <div class="card-body">
                <table class="bg-white shadow-md rounded-lg overflow-hidden w-full">
                    <thead class="bg-indigo-600">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Title</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Author</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Image</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-white">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($blogs as $blog)
                            <tr>
                                <td class="text-left py-3 px-4">{{ $blog->title }}</td>
                                <td class="text-left py-3 px-4">{{ $blog->author }}</td>
                                <td class="text-left py-3 px-4">
                                    @if ($blog->image_path)
                                        @if ($blog->isImageUrl())
                                            <img src="{{ $blog->image_path }}" alt="Blog Image"
                                                class="w-20 h-20 object-cover">
                                        @else
                                            <img src="{{ Storage::url($blog->image_path) }}" alt="Blog Image"
                                                class="w-20 h-20 object-cover">
                                        @endif
                                    @endif
                                </td>
                                <td class="text-left py-3 px-4">
                                    <a href="{{ route('blogs.edit', $blog->id) }}"
                                        class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
