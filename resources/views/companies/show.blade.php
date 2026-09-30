<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $company->name }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6 space-y-2">
                @if ($company->logo)
                    <img src="{{ Storage::url($company->logo) }}" alt="Logo" class="h-24 w-24 object-cover">
                @endif
                <p><strong>Email:</strong> {{ $company->email }}</p>
                <p><strong>Website:</strong> {{ $company->website }}</p>
                <p><strong>Employees:</strong> {{ $company->employees()->count() }}</p>
                <a href="{{ route('companies.index') }}" class="text-sm text-gray-600 underline">Back</a>
            </div>
        </div>
    </div>
</x-app-layout>