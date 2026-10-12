<x-layout>
    <form method="POST" action="/ideas">
        @csrf
        <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium text-white">Create New Idea</label>

            <div class="mt-2">
                <textarea name="description" id="description" rows="3" class="block w-full rounded-md bg-white/5 px-3"></textarea>
                <x-forms.error name="description"></x-forms.error>
            </div>

            <p class="mt-2 text-sm/6 text-gray-400">Have an idea you want to save for later?</p>
        </div>

        <div class="mt-6 flex items-center gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visable:outline-2 focus-visable:outline-offset-2 focus-visible:outline-indigo-500">
                Save
            </button>
        </div>
    </form>    
</x-layout>