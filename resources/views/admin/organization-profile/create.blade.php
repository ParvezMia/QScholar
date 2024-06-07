<x-app-layout>
    <div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
        <!-- title -->
        {!! $email
            ? '<h1 class="text-xl text-white">Organization Profile</h1>'
            : '<h1 class="text-xl text-white">Add Organization</h1>' !!}
    </div>
    <div class="-mt-12 mx-6 mb-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-1 xl:grid-cols-1">
        <!-- card -->
        <div class="card shadow">
            <!-- card body -->
            <div class="card-body">
                <!-- content -->
                <form action="{{ route('organizations.profile.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="py-3">
                        <label for="name" class="mb-2 block text-gray-800">Name</label>
                        <input type="text" id="name" name="name"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3"
                            placeholder="Name" value="{{ old('name') }}" />
                        @error('name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grid lg:grid-cols-2 gap-4">
                        <div class="py-3">
                            <label for="email" class="mb-2 block text-gray-800">Email</label>
                            <input type="email" id="email" name="email"
                                class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3"
                                placeholder="Email" value="{{ $email ? $email : '' }}" {{ $email ? 'disable' : '' }} />
                            @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="py-3">
                            <label for="website" class="mb-2 block text-gray-800">Website</label>
                            <input type="url" id="website" name="website"
                                class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3"
                                placeholder="Website" value="{{ old('website') }}" />
                            @error('website')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="py-3">
                        <label for="contact_number" class="mb-2 block text-gray-800">Contact Number</label>
                        <input type="text" id="contact_number" name="contact_number"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3"
                            placeholder="Contact Number" value="{{ old('contact_number') }}" />
                        @error('contact_number')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="py-3">
                        <label for="address" class="mb-2 block text-gray-800">Address</label>
                        <textarea id="address" name="address"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3"
                            placeholder="Address">{{ old('address') }}</textarea>
                        @error('address')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="py-3">
                        <label for="image" class="mb-2 block text-gray-800">Image</label>
                        <input type="file" id="image" name="image"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3" />
                        @error('image')
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
