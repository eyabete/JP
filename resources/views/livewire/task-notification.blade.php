<!-- resources/views/livewire/task-notification.blade.php -->
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 items-center overflow-hidden shadow-xl sm:rounded-lg " style="background-color:#fef9c3;">
            <div class="">
                @if ($tasks->count() > 0)
                <div class="bg-green-200 text-green-800 items-center p-4 rounded mb-4">
                    <p class="font-bold text-center mt-5">Tasks with a Deadline Today:</p>
                    <br>
                    <hr class="border-t-2 border-indigo-600 mb-6">
                    <ul class="text-center">
                        @foreach ($tasks as $task)
                        <li>{{ $task->todo }}</li>
                        <hr class="border-t-2 border-indigo-600 mb-6">
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

        </div>
    </div>
</div>