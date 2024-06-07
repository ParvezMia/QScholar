<x-app-layout>
    <div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
        <h1 class="text-xl text-white">Add Blog</h1>
    </div>
    <div class="-mt-12 mx-6 mb-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-1 xl:grid-cols-1">
        <div class="card shadow">
            <div class="card-body">
                <form id="blog-form" action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="py-3">
                        <label for="title" class="mb-2 block text-gray-800">Title</label>
                        <input type="text" id="title" name="title"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3"
                            placeholder="Title" value="{{ old('title') }}" />
                        @error('title')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="py-3">
                        <label for="author" class="mb-2 block text-gray-800">Author</label>
                        <input type="text" id="author" name="author"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3"
                            placeholder="Author" value="{{ old('author') }}" />
                        @error('author')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="py-3">
                        <label for="content" class="mb-2 block text-gray-800">Content</label>
                        <div id="editor" name="content">
                            {!! old('content') !!}
                        </div>
                        <textarea id="content" name="content" hidden>{{ old('content') }}</textarea>
                        @error('content')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="py-3">
                        <label for="published_at" class="mb-2 block text-gray-800">Published At</label>
                        <input type="date" id="published_at" name="published_at"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3"
                            value="{{ old('published_at') }}" />
                        @error('published_at')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="py-3">
                        <label for="image_path" class="mb-2 block text-gray-800">Image</label>
                        <input type="file" id="image_path" name="image_path"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3" />
                        @error('image_path')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="py-3 mt-5">
                        <button type="submit"
                            class="bg-indigo-600 text-white rounded py-2 px-4 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-500">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        // Initialize CKEditor
        CKEDITOR.replace('editor', {
            on: {
                change: function(evt) {
                    document.getElementById('content').value = evt.editor.getData();
                }
            }
        });

        // Ensure the CKEditor content is included in the form submission
        document.getElementById('blog-form').addEventListener('submit', function() {
            // Update the hidden textarea with CKEditor content
            document.getElementById('content').value = CKEDITOR.instances.editor.getData();
        });
    </script>
</x-app-layout>
