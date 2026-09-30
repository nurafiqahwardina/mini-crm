@csrf

<div>
    <x-input-label for="name" value="Name *" />
    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $company->name ?? '')" />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>

<div class="mt-4">
    <x-input-label for="email" value="Email" />
    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $company->email ?? '')" />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<div class="mt-4">
    <x-input-label for="logo" value="Logo (min 100x100)" />
    @if (!empty($company->logo))
        <img src="{{ Storage::url($company->logo) }}" alt="Logo" class="h-16 w-16 object-cover mb-2">
    @endif
    <input id="logo" name="logo" type="file" accept="image/*" class="mt-1 block w-full text-sm">
    <x-input-error :messages="$errors->get('logo')" class="mt-2" />
</div>

<div class="mt-4">
    <x-input-label for="website" value="Website" />
    <x-text-input id="website" name="website" type="url" class="mt-1 block w-full" :value="old('website', $company->website ?? '')" />
    <x-input-error :messages="$errors->get('website')" class="mt-2" />
</div>

<div class="mt-6 flex items-center gap-3">
    <x-primary-button>Save</x-primary-button>
    <a href="{{ route('companies.index') }}" class="text-sm text-gray-600 underline">Cancel</a>
</div>