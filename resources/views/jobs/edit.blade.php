<x-layout>
    <x-slot:title>Edit Job</x-slot:title>
    <x-slot:heading>Edit Job {{ $job->title }}</x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}" id="job-form">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title"
                               class="block text-sm font-medium leading-6 text-gray-900 dark:text-slate-100">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input
                                    type="text"
                                    required
                                    minlength="3"
                                    maxlength="255"
                                    name="title"
                                    id="title"
                                    value="{{ $job->title }}"
                                    placeholder="Shift Leader"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 dark:text-slate-200 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                >
                            </div>
                        </div>
                        <x-ui.input-error :messages="$errors->get('title')" class="mt-2" />

                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary"
                               class="block text-sm font-medium leading-6 text-gray-900 dark:text-slate-100">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input
                                    type="text"
                                    required
                                    name="salary"
                                    id="salary"
                                    value="{{ $job->salary }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 dark:text-slate-200 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="$50,000 Per Year"
                                >
                            </div>
                        </div>
                        <x-ui.input-error :messages="$errors->get('salary')" class="mt-2" />
                    </div>
                </div>
            </div>


        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button
                    form="delete-form"
                    type="submit"
                    class="text-sm font-semibold text-red-500"
                >
                    Delete
                </button>
            </div>

            <div class="flex items-center gap-x-6">
                <div>
                    <x-ui.button-link
                        href="/jobs/{{ $job->id }}"
                        class="text-sm font-semibold leading-6 text-gray-900 dark:text-slate-100"
                    >
                        Cancel
                    </x-ui.button-link>
                </div>

                <div>
                    <button
                        type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    >
                        Update
                    </button>
                </div>
            </div>
        </div>
    </form>
    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
