<x-layout>
    @dump($tasks)

    <h1>Tasks</h1>

    @forelse($tasks as $key => $task)
        <li>Task {{ $key+1 }}: {{ $task }}</li>
    @empty
        <p>Your task list is empty, yippee</p>
    @endforelse
</x-layout>