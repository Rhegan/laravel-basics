<x-layout title="View Idea">
    <div class="card bg-neutral p-6">
        <h2 class="font-bold">See Your Idea</h2>
        
        <div class="mt-6">
            {{ $idea->description }}
        </div>
        
        <div class="mt-6 flex items-center gap-x-6">
            <a href="/ideas/{{ $idea->id }}/edit" class="btn btn-primary">
                Edit
            </a>
        </div>
    </div>
</x-layout>