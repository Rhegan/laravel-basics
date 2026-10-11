<x-layout>
    <div class="mt-6 text-white">
        <h2 class="font-bold">See Your Idea</h2>
        
        <div class="mt-6">
            {{ $idea->description }}
        </div>
        
            <div class="mt-6 flex items-center gap-x-6">
                <a href="/ideas/{{ $idea->id }}/edit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visable:outline-2 focus-visable:outline-offset-2 focus-visible:outline-indigo-500">
                    Edit
                </a>
            </div>
    </div>
</x-layout>