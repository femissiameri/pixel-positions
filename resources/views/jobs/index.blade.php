<x-layout>
    <div class="space-y-10 pb-10">
        <section class="pt-6">
            <h1 class="font-bold text-4xl text-center">Let's Find Your Next Job</h1>
            <x-forms.form action="/search" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="I'm looking for..." />
            </x-forms.form>
        </section>

        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="flex items-baseline flex-wrap gap-2 mt-6">
                @foreach($tags as $tag)
                    <x-tag size="md" :name="$tag->name" /> {{-- :$tag is the same as :tag="$tag" --}}
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="flex flex-col gap-8 mt-6">
                @foreach($jobs as $job)
                    <x-expanded-job-card :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
