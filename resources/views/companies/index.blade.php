<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Companies</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
            @endif

            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <a href="{{ route('companies.create') }}"
                   class="inline-block mb-4 px-4 py-2 bg-green-600 text-white rounded text-sm">
                    Create new company
                </a>

                <table class="w-full text-left text-sm">
                    <thead>
                        <tr class="border-b">
                            <th class="py-2">Logo</th>
                            <th class="py-2">Name</th>
                            <th class="py-2">Email</th>
                            <th class="py-2">Website</th>
                            <th class="py-2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($companies as $company)
                            <tr class="border-b">
                                <td class="py-2">
                                    @if ($company->logo)
                                        <img src="{{ Storage::url($company->logo) }}" alt="Logo" class="h-10 w-10 object-cover">
                                    @endif
                                </td>
                                <td class="py-2">
                                    <a href="{{ route('companies.show', $company) }}" class="text-indigo-600">{{ $company->name }}</a>
                                </td>
                                <td class="py-2">{{ $company->email }}</td>
                                <td class="py-2">{{ $company->website }}</td>
                                <td class="py-2 flex gap-2">
                                    <a href="{{ route('companies.edit', $company) }}" class="px-2 py-1 border rounded text-xs">Edit</a>
                                    <form method="POST" action="{{ route('companies.destroy', $company) }}"
                                          onsubmit="return confirm('Delete this company?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="px-2 py-1 bg-red-600 text-white rounded text-xs">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="5" class="py-4 text-gray-500">No companies yet.</td></tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="mt-4">{{ $companies->links() }}</div>
            </div>
        </div>
    </div>
</x-app-layout>