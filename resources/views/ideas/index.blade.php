<x-layout title="Ideas">
    @if ($ideas->isNotEmpty())
        <div class="mt-6 text-white">
            <h2 class="font-bold">Your Ideas</h2>
            <ul class="mt-6 grid grid-cols-2 gap-x-4 gap-y-4">
                @foreach ($ideas as $idea)
                    <x-ideaCard :idea="$idea" />
                @endforeach
            </ul>
        </div>
    @else
        <p>No ideas yet. <a href="/ideas/create" class="underline">Create a new one</a></p>
    @endif
</x-layout>