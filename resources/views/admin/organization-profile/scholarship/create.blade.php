<x-app-layout>
    <div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
        <h1 class="text-xl text-white">Add Scholarship</h1>
    </div>
    <div class="-mt-12 mx-6 mb-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-1 xl:grid-cols-1">
        <div class="card shadow">
            <div class="card-body">
                <form id="scholarship-form" action="{{ route('scholarships.profile.store') }}" method="post">
                    @csrf
                    <div class="py-3">
                        <label for="scholarship_name" class="mb-2 block text-gray-800">Scholarship Name</label>
                        <input type="text" id="scholarship_name" name="scholarship_name"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3"
                            placeholder="Scholarship Name" value="{{ old('scholarship_name') }}" />
                        @error('scholarship_name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="py-3">
                        <label for="scholarship_organization_id" class="mb-2 block text-gray-800">Organization</label>
                        <select id="scholarship_organization_id" name="scholarship_organization_id"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3">
                            @foreach ($organizations as $organization)
                                <option value="{{ $organization->id }}">{{ $organization->org_name }}</option>
                            @endforeach
                        </select>
                        @error('scholarship_organization_id')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- <div class="py-3">
                        <label for="scholarship_description" class="mb-2 block text-gray-800">Description</label>

                        <textarea id="scholarship_description" name="scholarship_description"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3">{{ old('scholarship_description') }}</textarea>
                        @error('scholarship_description')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div> --}}
                    <div class="py-3">
                        <label for="scholarship_description" class="mb-2 block text-gray-800">Description</label>
                        <div id="editor" name="scholarship_description">
                            {!! old('scholarship_description') !!}
                        </div>
                        <textarea id="scholarship_description" name="scholarship_description" hidden>{{ old('scholarship_description') }}</textarea>
                        @error('scholarship_description')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label for="editor" class="text-gray-600 font-semibold">Content</label>
                        <div id="editor" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                    </div>

                    <div class="py-3">
                        <label for="scholarship_amount" class="mb-2 block text-gray-800">Amount</label>
                        <input type="number" id="scholarship_amount" name="scholarship_amount"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3"
                            placeholder="Amount" value="{{ old('scholarship_amount') }}" />
                        @error('scholarship_amount')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="py-3">
                        <label for="scholarship_application_deadline" class="mb-2 block text-gray-800">Application
                            Deadline</label>
                        <input type="date" id="scholarship_application_deadline"
                            name="scholarship_application_deadline"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3"
                            value="{{ old('scholarship_application_deadline') }}" />
                        @error('scholarship_application_deadline')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="py-3">
                        <label for="scholarship_eligibility_criteria" class="mb-2 block text-gray-800">Eligibility
                            Criteria</label>
                        <textarea id="scholarship_eligibility_criteria" name="scholarship_eligibility_criteria"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3"
                            placeholder="Eligibility Criteria">{{ old('scholarship_eligibility_criteria') }}</textarea>
                        @error('scholarship_eligibility_criteria')
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
                    document.getElementById('scholarship_description').value = evt.editor.getData();
                }
            }
        });

        // Ensure the CKEditor content is included in the form submission
        document.getElementById('scholarship-form').addEventListener('submit', function() {
            // Update the hidden textarea with CKEditor content
            document.getElementById('scholarship_description').value = CKEDITOR.instances.editor.getData();
        });
    </script>
</x-app-layout>
