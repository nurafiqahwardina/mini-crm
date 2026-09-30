<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $employee->first_name }} {{ $employee->last_name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6 space-y-2">
                <p><strong>Company:</strong> {{ $employee->company->name }}</p>
                <p><strong>Email:</strong> {{ $employee->email }}</p>
                <p><strong>Phone:</strong> {{ $employee->phone }}</p>
                <a href="{{ route('employees.index') }}" class="text-sm text-gray-600 underline">Back</a>
            </div>
        </div>
    </div>
</x-app-layout>