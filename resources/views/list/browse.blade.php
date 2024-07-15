<x-layout pageTitle="My lists">
    <x-navigation-header></x-navigation-header>

    <main class="isolate container mx-auto px-6 lg:px-8">
        <div class="py-24 sm:py-32">
            <div class="flex justify-end mb-6 sm:mb-10">
                <x-nav-link :href="route('list.new')" type="button-link">Create a list</x-nav-link>
            </div>
            <ul role="list" class="grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-3 xl:gap-x-8">
                @foreach($taskLists as $taskList)
                    <x-list-card :title="$taskList->name" :description="$taskList->description" route="list.show" :task-list="$taskList"></x-list-card>
                @endforeach
            </ul>
        </div>
    </main>
</x-layout>
