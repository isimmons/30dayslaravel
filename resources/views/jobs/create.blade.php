<x-layout>
    <x-slot:title>Create Job</x-slot:title>
    <x-slot:heading>Create Job</x-slot:heading>

    @php
        /*
            foo.js is work in progress. Working but need to validate and then
            figure out how to put the errors into the dom
            https://developer.mozilla.org/en-US/docs/Learn/Forms/Sending_forms_through_JavaScript

        @vite('resources/js/foo.js')
        */
    @endphp


    <form method="POST" action="/jobs" id="job-form">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900 dark:text-slate-100">Create a new job.</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-slate-100">We just need a few details.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-ui.form-field>
                        <x-ui.input-label for="title">Title</x-ui.input-label>
                        <x-ui.input-text
                            required
                            minlength="3"
                            maxlength="255"
                            name="title"
                            id="title"
                            value="{{ old('title') }}"
                            placeholder="Shift Leader"
                        />
                        <x-ui.input-error :messages="$errors->get('title')" class="mt-2" />
                    </x-ui.form-field>

                    <x-ui.form-field>
                        <x-ui.input-label for="salary">Salary</x-ui.input-label>
                        <x-ui.input-text
                            required
                            name="salary"
                            id="salary"
                            value="{{ old('salary') }}"
                            placeholder="$50,000 Per Year"
                        />
                        <x-ui.input-error :messages="$errors->get('salary')" class="mt-2" />
                    </x-ui.form-field>
                </div>
            </div>


        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button
                type="button"
                class="text-sm font-semibold leading-6 text-gray-900 dark:text-slate-100"
            >
                Cancel
            </button>
            <x-ui.form-button>Save</x-ui.form-button>
        </div>
    </form>

</x-layout>
