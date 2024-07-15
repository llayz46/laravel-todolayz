<x-layout :page-title="\Illuminate\Support\Str::title($taskList->name)">
    <x-navigation-header></x-navigation-header>

    <main class="isolate container mx-auto px-6 lg:px-8">
        <div class="py-24 sm:py-32">
            <div class="border-b border-gray-900/10 dark:border-gray-200/10 pb-5 sm:flex sm:items-center sm:justify-between">
                <h3 class="text-base font-semibold leading-6 text-title">{{ \Illuminate\Support\Str::title($taskList->name) }}</h3>
                <div class="mt-3 sm:ml-4 sm:mt-0 flex gap-4" data-controller="modal">
                    <form class="relative flex items-center" method="post" action="{{ route('task.store', $taskList) }}">
                        @csrf
                        <x-input-text name="name" id="name" type="text" required placeholder="Add a task"></x-input-text>
                        <div class="absolute inset-y-0 right-0 flex py-1.5 pr-1.5">
                            <button type="submit" class="inline-flex items-center rounded border border-gray-900/10 dark:border-gray-200/10 px-1 font-sans text-xs text-body hover:border-accent-300 transition-colors">Enter</button>
                        </div>
                    </form>
                    <a href="{{ route('list.edit', $taskList) }}" class="inline-flex items-center rounded-md bg-accent-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-accent-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent-500">Edit</a>
                    <button data-action="modal#open" class="inline-flex items-center rounded-md bg-primary-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-500">Delete</button>

                    <div class="hidden relative z-10 transition" aria-labelledby="modal-title" role="dialog" aria-modal="true" data-modal-target="modal">

                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                    <form action="{{ route('list.destroy', $taskList) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                            <div class="sm:flex sm:items-start">
                                                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                    <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                                    </svg>
                                                </div>
                                                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                                    <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Delete this list</h3>
                                                    <div class="mt-2">
                                                        <p class="text-sm text-gray-500 mb-2">Please enter the name of your task list : <span class="font-semibold">{{ $taskList->name }}</span></p>
                                                        <x-input-text name="name" id="name" type="text" required placeholder="{{ $taskList->name }}"></x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                            <button type="submit" class="sm:ml-3 inline-flex items-center rounded-md bg-primary-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-500">Delete</button>
                                            <button type="button" data-action="modal#closeModal" class="hover:ring-accent-400 mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flow-root p-4 border border-gray-900/10 dark:border-gray-200/10 rounded-md">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <table class="min-w-full divide-y border-gray-900/10 dark:border-gray-200/10">
                            <thead>
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-title sm:pl-0">Name</th>
                                <th scope="col" class="py-3.5 text-right text-sm font-semibold text-title sm:pl-0">Status</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y border-gray-900/10 dark:border-gray-200/10">
                            @foreach($tasks as $task)
                                <tr class="border-gray-900/10 dark:border-gray-200/10">
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-body sm:pl-0 @if($task->completed) line-through text-green-500 @endif">
                                        {{ \Illuminate\Support\Str::title($task->name) }}
                                    </td>
                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                        <form method="post" action="{{ route('task.status', ['taskList' => $taskList, 'task' => $task]) }}" data-auto-submit-target="form" data-controller="auto-submit">
                                            @csrf
                                            @method('patch')
                                            <input type="checkbox" name="completed" class="rounded border-gray-300 dark:border-gray-700 bg-background text-primary-500 shadow-sm focus:ring-primary-500" @checked($task->completed) data-action="click->auto-submit#submit">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
