<x-slot name="header">
    <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('My Journal') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 shadow-xl sm:rounded-lg p-6" style="background-color:#fef9c3;">

            <div>
                <form class="mb-4" wire:submit.prevent="addNote">
                    <div class="flex items-center space-x-4">
                        <input type="text" wire:model="newNote.title" placeholder="Enter your journal title..." class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-indigo-500 flex-1">
                        <textarea wire:model="newNote.content" placeholder="Enter your journal content..." class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-indigo-500 flex-1"></textarea>
                        <button type="submit" class="px-6 py-2 bg-indigo-500 hover:bg-indigo-600 rounded-md text-white focus:outline-none focus:ring focus:border-indigo-700">Save</button>
                    </div>
                </form>

                @if (count($notes) == 0)
                <p class="text-gray-500 text-center">There are no journal entries yet</p>
                @endif

                @foreach($notes as $note)
                <div class="border p-3 my-4 mb-4 rounded-md bg-gray-100 dark:bg-gray-700">
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300" wire:click="toggleContent({{ $note->id }})">{{ $note->title }}</h3>
                    <div wire:ignore.self>
                        <p class="text-gray-800 dark:text-gray-200" x-show="showContent_{{ $note->id }}">
                            {{ $note->content }}
                        </p>
                    </div>
                    <p class="text-gray-500 text-sm">
                        @if ($note->created_at->isToday())
                        Created today at {{ $note->created_at->format('h:i A') }}
                        @else
                        Created on {{ $note->created_at->format('Y-m-d h:i A') }}
                        @endif
                    </p>
                    <div class="flex justify-between items-center mt-2">
                        <button wire:click="editNote({{ $note->id }})" class="text-indigo-500 hover:text-indigo-700 focus:outline-none">Edit</button>
                        <button wire:click="deleteNote({{ $note->id }})" class="text-red-500 hover:text-red-700 focus:outline-none">Delete</button>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>