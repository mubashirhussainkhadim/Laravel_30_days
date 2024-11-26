<x-layout>
    <x-slot:heading>
      Jobs Page
    </x-slot:heading>
    <div class="max-w-2xl mx-auto p-6">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Job Details</h1>
        <div class="p-6 bg-white border border-gray-200 shadow rounded-md">
            <h2 class="text-xl font-bold text-blue-700 mb-2">{{ $job['name'] }}</h2>
            <span class="text-gray-600 text-sm">Company Name :{{  $job->employer->name }} </span>
            <h6 class="text-gray-600 text-lg">{{($job['salary']) }} Dollars Per Year</h6>
        </div>
    </div>
    @can('edit' , $job)
    <button type="button" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      <a class="text-left text-decoration-none text-white" href="/jobs/{{$job->id}}/edit">Edit Job</a>
    </button>
    @endcan
</x-layout>
