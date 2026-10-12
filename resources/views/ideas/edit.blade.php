<x-layout title="Edit Idea">
    <form class="card bg-neutral p-6" method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('PATCH')
        <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium text-white">Edit Your Idea</label>

            <div class="mt-2">
                <textarea name="description" id="description" rows="3" class="textarea w-full">{{ $idea->description }}</textarea>
                <x-forms.error name="description"/>
            </div>

            <p class="mt-2 text-sm/6 text-gray-400">Have an idea you want to save for later?</p>
        </div>

        <div class="mt-6 flex items-center gap-x-2">
            <button type="submit" class="btn btn-primary">
                Update
            </button>

            <button form="delete-idea-form" type="submit" class="btn btn-error">
                Delete
            </button>
        </div>
    </form> 

    <form id="delete-idea-form" method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('DELETE')
        
    </form>
</x-layout>