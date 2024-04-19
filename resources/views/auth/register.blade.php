<x-layout>
    <x-slot:title>Register</x-slot:title>
    <x-slot:heading>Create an Account</x-slot:heading>

    <form method="POST" action="/register" id="job-form">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-ui.form-field>
                        <x-ui.input-label for="first_name">First Name</x-ui.input-label>
                        <x-ui.input-text
                            required
                            minlength="3"
                            maxlength="255"
                            name="first_name"
                            id="first_name"
                            :value="old('first_name')"
                        />
                        <x-ui.input-error :messages="$errors->get('first_name')" class="mt-2" />
                    </x-ui.form-field>

                    <x-ui.form-field>
                        <x-ui.input-label for="last_name">Last Name</x-ui.input-label>
                        <x-ui.input-text
                            required
                            minlength="3"
                            maxlength="255"
                            name="last_name"
                            id="last_name"
                            :value="old('last_name')"
                        />
                        <x-ui.input-error :messages="$errors->get('last_name')" class="mt-2" />
                    </x-ui.form-field>

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

                    <x-ui.form-field>
                        <x-ui.input-label for="password_confirmation">Confirm Password</x-ui.input-label>
                        <x-ui.input-text
                            type="password"
                            required
                            minlength="3"
                            maxlength="255"
                            name="password_confirmation"
                            id="password_confirmation"
                        />
                        <x-ui.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </x-ui.form-field>
                </div>
            </div>


        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-ui.button-link href="/">
                Cancel
            </x-ui.button-link>
            <x-ui.form-button>Register</x-ui.form-button>
        </div>
    </form>

</x-layout>
