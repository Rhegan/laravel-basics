<x-layout>
    <form action="/login" method="POST">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">Login</legend>

            <div>
                <label for="email" class="label">Email</label>
                <input name="email" type="email" class="input @error('email') textarea-error @enderror" placeholder="Your Email" required />
                <x-forms.error name="email"/>
            </div>

            <div>
                <label for="password" class="label">Password</label>
                <input name="password" type="password" class="input @error('password') textarea-error @enderror" placeholder="Password" autocomplete="new-password" required />
                <x-forms.error name="password"/> 
            </div>

            <button type="submit" class="btn btn-neutral mt-4">Login</button>
        </fieldset>
    </form>
</x-layout>