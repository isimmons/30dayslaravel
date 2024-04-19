<x-layout>
    <x-slot:title>Job</x-slot:title>
    <x-slot:heading>Job</x-slot:heading>

    <h2 class="text-lg font-bold">{{ $job->title }}</h2>
    <p>
        This job pays {{ $job->salary }} per year.
    </p>

    <div class="mt-4">
        <x-ui.button-link href="/jobs/{{ $job->id }}/edit">Edit Job</x-ui.button-link>
    </div>
</x-layout>
