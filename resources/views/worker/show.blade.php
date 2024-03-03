<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="grid grid-cols-2 gap-4">
                    <div class="border p-4">
                        <p class="font-semibold">Name:</p>
                        <p>{{ $worker->name }}</p>
                    </div>
                    <div class="border p-4">
                        <p class="font-semibold">Email:</p>
                        <p>{{ $worker->email }}</p>
                    </div>
                    <div class="border p-4">
                        <p class="font-semibold">Location:</p>
                        <p>{{ $worker->location }}</p>
                    </div>
                    <div class="border p-4">
                        <p class="font-semibold">Number:</p>
                        <p>{{ $worker->number }}</p>
                    </div>
                    <div class="border p-4">
                        <p class="font-semibold">Father's Name:</p>
                        <p>{{ $worker->father_name }}</p>
                    </div>
                    <div class="border p-4">
                        <p class="font-semibold">Mother's Name:</p>
                        <p>{{ $worker->mother_name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
