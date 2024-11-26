<x-layout>
    <x-slot:heading>
    Jobs Pages
    </x-slot:heading>

    <div class="max-w-5xl mx-auto px-6 py-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Available Jobs</h1>
        <ul class="space-y-4">
            @foreach($jobs as $job)
                <li class="border-b border-gray-300 pb-4">
                    <a href="{{ url( 'job/' . $job->id) }}" class="flex justify-between items-center hover:text-blue-700">
                        <div>
                            <h2 class="text-xl font-semibold">{{ $job->name }}</h2>
                            <p class="text-gray-600 text-sm">
                                Company: {{ $job->employer->name ?? 'N/A' }}
                            </p>
                            <p class="text-gray-600 text-sm">
                                Salary: {{($job->salary) }} Dollars Per Year
                            </p>
                        </div>
                        <span class="text-blue-500 text-sm font-medium">View Details &rarr;</span>
                    </a>
                </li>
            @endforeach
        </ul>

        {{-- Pagination Links --}}
        <div class="mt-6">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
