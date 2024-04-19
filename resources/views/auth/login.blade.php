<x-layout>
    <x-slot:title>Login</x-slot:title>
    <x-slot:heading>Log In</x-slot:heading>

    <form method="POST" action="/login" id="job-form">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-ui.form-field>
                        <x-ui.input-label for="email">Email</x-ui.input-label>
                        <x-ui.input-text
                            type="email"
                            required
                            minlength="3"
                            maxlength="255"
                            name="email"
                            id="email"
                            :value="old('email')"
                        />
                        <x-ui.input-error :messages="$errors->get('email')" class="mt-2" />
                    </x-ui.form-field>

                    <x-ui.form-field>
                        <x-ui.input-label for="password">Password</x-ui.input-label>
                        <x-ui.input-text
                            type="password"
                            required
                            minlength="3"
                            maxlength="255"
                            name="password"
                            id="password"
                        />
                        <x-ui.input-error :messages="$errors->get('password')" class="mt-2" />
                    </x-ui.form-field>
                </div>
            </div>


        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-ui.button-link href="/">
                Cancel
            </x-ui.button-link>
            <x-ui.form-button>Log In</x-ui.form-button>
        </div>
    </form>

</x-layout>
