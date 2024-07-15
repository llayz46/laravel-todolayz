<x-layout pageTitle="Edit list">
    <x-navigation-header></x-navigation-header>

    <div class="mt-32">
        <header>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight tracking-tight text-title">Edit a list</h1>
            </div>
        </header>
        <main class="container mx-auto max-w-7xl px-6 lg:px-8">
            <x-profile-form
                route="list.update"
                :params="$taskList"
                method="PATCH"
                form-title="Edit list"
                :profile="false"
                formDescription="Edit your list : {{ $taskList->name }}"
                fields="2">
                <div class="sm:col-span-4">
                    <x-input-label for="name">Name</x-input-label>
                    <div class="mt-2">
                        <div
                            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary-500 sm:max-w-md">
                            <x-input-text name="name" id="name" placeholder="Home tasks list"
                                          required :value="$taskList->name" type="text">
                            </x-input-text>
                        </div>
                        @error('name')
                        <p class="mt-2 text-sm text-primary-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <x-input-label for="description">Description</x-input-label>
                    <div class="mt-2">
                        <div
                            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary-500 sm:max-w-md">
                            <x-input-textarea name="description" id="description" placeholder="This list is for home tasks"
                                              required>{{$taskList->description}}
                            </x-input-textarea>
                        </div>
                        @error('description')
                        <p class="mt-2 text-sm text-primary-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </x-profile-form>
        </main>
    </div>
</x-layout>
