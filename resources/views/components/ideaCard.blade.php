@props([
    'idea'  => null,
])

<a href="/ideas/{{ $idea->id }}" {{ $attributes->merge(['class' => "card bg-neutral text-neutral-content w-70"]) }}>
    <div class="card-body">
        <h2 class="card-title">{{ $idea->description }}</h2>
        <div class="card-actions mt-auto justify-end">
        </div>
    </div>
</a>