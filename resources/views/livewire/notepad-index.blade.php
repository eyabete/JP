
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <div>
    <form wire:submit.prevent="addNote">
        <input type="text" wire:model="newNote" placeholder="Enter your journal...">
        <button type="submit">Save</button>
    </form>

    @if (count($notes) == 0)
        <p class="text-gray-500 text-center">There are no journal entries yet</p>
    @endif

    @foreach($notes as $note)
        <div class="border p-3 my-2">
            @if ($editingNoteId !== $note->id)
                <p>{{ $note->content }}</p>
                <button wire:click="editNote({{ $note->id }})">Edit</button>
            @else
                <input type="text" wire:model="newNote">
                <button wire:click="saveNote({{ $note->id }})">Save</button>
                <button wire:click="cancelEdit">Cancel</button>
            @endif

            <button wire:click="deleteNote({{ $note->id }})">Delete</button>
        </div>
    @endforeach
</div>

            </div>
        </div>
    </div>
