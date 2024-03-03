<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Register worker') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('worker.update', $worker) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                            <input type="text" id="name" name="name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('name', $worker->name) }}"
                            />
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                            <input type="email" id="email" name="email" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('email', $worker->email) }}"
                            />
                        </div>
                        <div>
                            <label for="location" class="block text-gray-700 text-sm font-bold mb-2">Location</label>
                            <input type="text" id="location" name="location" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old( 'location', $worker->location) }}"
                            />
                        </div>
                        <div>
                            <label for="number" class="block text-gray-700 text-sm font-bold mb-2">Number</label>
                            <input type="text" id="number" name="number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old( 'number', $worker->number ) }}"
                            />
                        </div>
                        <div>
                            <label for="father_name" class="block text-gray-700 text-sm font-bold mb-2">Father's Name</label>
                            <input type="text" id="father_name" name="father_name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old( 'father_name', $worker->father_name ) }}"
                            />
                        </div>
                        <div>
                            <label for="mother_name" class="block text-gray-700 text-sm font-bold mb-2">Mother's Name</label>
                            <input type="text" id="mother_name" name="mother_name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old( 'mother_name', $worker->mother_name ) }}"
                            />
                        </div>
                    </div>
                    <div class="flex items-center justify-start mt-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
