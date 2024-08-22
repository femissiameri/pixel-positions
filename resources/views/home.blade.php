<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Top Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card/>
                <x-job-card/>
                <x-job-card/>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="space-x-2 mt-6">
                <x-tag>Frontend</x-tag>
                <x-tag>React.js</x-tag>
                <x-tag>Laravel</x-tag>
                <x-tag>Frontend</x-tag>
                <x-tag>React.js</x-tag>
                <x-tag>Laravel</x-tag>
                <x-tag>Frontend</x-tag>
                <x-tag>React.js</x-tag>
                <x-tag>Laravel</x-tag>
                <x-tag>Frontend</x-tag>
            </div>
        </section>
    </div>
</x-layout>
