<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Employees</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
            @endif

            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <a href="{{ route('employees.create') }}"
                   class="inline-block mb-4 px-4 py-2 bg-green-600 text-white rounded text-sm">
                    Create new employee
                </a>

                <table class="w-full text-left text-sm">
                    <thead>
                        <tr class="border-b">
                            <th class="py-2">Name</th>
                            <th class="py-2">Company</th>
                            <th class="py-2">Email</th>
                            <th class="py-2">Phone</th>
                            <th class="py-2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($employees as $employee)
                            <tr class="border-b">
                                <td class="py-2">
                                    <a href="{{ route('employees.show', $employee) }}" class="text-indigo-600">
                                        {{ $employee->first_name }} {{ $employee->last_name }}
                                    </a>
                                </td>
                                <td class="py-2">{{ $employee->company->name }}</td>
                                <td class="py-2">{{ $employee->email }}</td>
                                <td class="py-2">{{ $employee->phone }}</td>
                                <td class="py-2 flex gap-2">
                                    <a href="{{ route('employees.edit', $employee) }}" class="px-2 py-1 border rounded text-xs">Edit</a>
                                    <form method="POST" action="{{ route('employees.destroy', $employee) }}"
                                          onsubmit="return confirm('Delete this employee?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="px-2 py-1 bg-red-600 text-white rounded text-xs">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="5" class="py-4 text-gray-500">No employees yet.</td></tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="mt-4">{{ $employees->links() }}</div>
            </div>
        </div>
    </div>
</x-app-layout>