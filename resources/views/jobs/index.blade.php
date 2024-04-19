<x-layout>
    <x-slot:title>Jobs</x-slot:title>
    <x-slot:heading>Jobs Listing</x-slot:heading>

    <div class="space-y-2">
        @foreach($jobs as $job)
            <a href="/jobs/{{ $job->id }}"
               class="hover:bg-slate-200 dark:hover:bg-slate-500 dark:hover:text-slate-100 block px-4 py-6 border border-slate-200 dark:border-slate-500 rounded-md shadow dark:shadow-slate-500">
                <div class="font-semibold text-blue-400">
                    {{ $job->employer->name }}
                </div>
                <div>
                    <strong>{{ $job->title }}:</strong> Pays {{ $job->salary }} per year
                </div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
