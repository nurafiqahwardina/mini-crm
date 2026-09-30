@csrf

<div>
    <x-input-label for="first_name" value="First Name *" />
    <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" :value="old('first_name', $employee->first_name ?? '')" />
    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
</div>

<div class="mt-4">
    <x-input-label for="last_name" value="Last Name *" />
    <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" :value="old('last_name', $employee->last_name ?? '')" />
    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
</div>

<div class="mt-4">
    <x-input-label for="company_id" value="Company *" />
    <select id="company_id" name="company_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        <option value="">-- Select company --</option>
        @foreach ($companies as $company)
            <option value="{{ $company->id }}"
                @selected(old('company_id', $employee->company_id ?? '') == $company->id)>
                {{ $company->name }}
            </option>
        @endforeach
    </select>
    <x-input-error :messages="$errors->get('company_id')" class="mt-2" />
</div>

<div class="mt-4">
    <x-input-label for="email" value="Email" />
    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $employee->email ?? '')" />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<div class="mt-4">
    <x-input-label for="phone" value="Phone" />
    <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $employee->phone ?? '')" />
    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
</div>

<div class="mt-6 flex items-center gap-3">
    <x-primary-button>Save</x-primary-button>
    <a href="{{ route('employees.index') }}" class="text-sm text-gray-600 underline">Cancel</a>
</div>