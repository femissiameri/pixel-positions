<x-layout>
    <x-page-heading>Results</x-page-heading>

    <div class="flex flex-col gap-8 mt-6">
        @foreach($jobs as $job)
            <x-expanded-job-card :$job />
        @endforeach
    </div>
</x-layout>
