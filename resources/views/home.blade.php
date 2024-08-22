<x-layout>
    <div class="space-y-10 pb-10">
        <section class="pt-6">
            <h1 class="font-bold text-4xl text-center">Let's Find Your Next Job</h1>
            <form class="w-full mt-6">
                <input type="text" placeholder="I'm looking for..." class="block px-5 py-3 w-full max-w-xl mx-auto bg-white/10 rounded-xl border border-white/30 focus-visible:outline-none" />
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Top Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card/>
                <x-job-card/>
                <x-job-card/>
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="flex items-baseline flex-wrap gap-2 mt-6">
                <x-tag size="md">Frontend</x-tag>
                <x-tag size="md">React.js</x-tag>
                <x-tag size="md">Laravel</x-tag>
                <x-tag size="md">Frontend</x-tag>
                <x-tag size="md">React.js</x-tag>
                <x-tag size="md">Laravel</x-tag>
                <x-tag size="md">Frontend</x-tag>
                <x-tag size="md">React.js</x-tag>
                <x-tag size="md">Laravel</x-tag>
                <x-tag size="md">Frontend</x-tag>
                <x-tag size="md">React.js</x-tag>
                <x-tag size="md">Laravel</x-tag>
                <x-tag size="md">Frontend</x-tag>
                <x-tag size="md">React.js</x-tag>
                <x-tag size="md">Laravel</x-tag>
                <x-tag size="md">Frontend</x-tag>
                <x-tag size="md">React.js</x-tag>
                <x-tag size="md">Laravel</x-tag>
                <x-tag size="md">Frontend</x-tag>
                <x-tag size="md">React.js</x-tag>
                <x-tag size="md">Laravel</x-tag>
                <x-tag size="md">Frontend</x-tag>
                <x-tag size="md">React.js</x-tag>
                <x-tag size="md">Laravel</x-tag>
                <x-tag size="md">Frontend</x-tag>
                <x-tag size="md">React.js</x-tag>
                <x-tag size="md">Laravel</x-tag>
                <x-tag size="md">Frontend</x-tag>
                <x-tag size="md">React.js</x-tag>
                <x-tag size="md">Laravel</x-tag>
                <x-tag size="md">Frontend</x-tag>
                <x-tag size="md">React.js</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="flex flex-col gap-8 mt-6">
                <x-expanded-job-card/>
                <x-expanded-job-card/>
                <x-expanded-job-card/>
            </div>
        </section>
    </div>
</x-layout>
