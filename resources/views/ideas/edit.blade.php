<x-layout>
    <form method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('PATCH')
        <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium text-white">Edit Your Idea</label>

            <div class="mt-2">
                <textarea name="description" id="description" rows="3" class="block w-full rounded-md bg-white/5 px-3">{{ $idea->description }}</textarea>
                <x-forms.error name="description"/>
            </div>

            <p class="mt-2 text-sm/6 text-gray-400">Have an idea you want to save for later?</p>
        </div>

        <div class="mt-6 flex items-center gap-x-2">
            <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visable:outline-2 focus-visable:outline-offset-2 focus-visible:outline-indigo-500">
                Update
            </button>

            <button form="delete-idea-form" type="submit" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white focus-visable:outline-2 focus-visable:outline-offset-2 focus-visible:outline-red-500">
                Delete
            </button>
        </div>
    </form> 

    <form id="delete-idea-form" method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('DELETE')
        
    </form>
</x-layout>