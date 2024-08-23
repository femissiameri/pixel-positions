@props(['job'])

<div
    class="p-4 bg-white/5 hover:bg-white/10 rounded-xl flex items-start space-x-6 border border-transparent hover:border-blue-600 transition-colors duration-300 cursor-pointer group">
    <x-employer-logo :employer="$job->employer" />
    <div class="flex-1">
        <div class="flex justify-between items-center">
            <div class="self-start text-sm font-medium text-gray-400">{{ $job->employer->name }}</div>
            <div class="space-x-1">
                <x-tag variant="outline" :name="$job->location" />
                <x-tag variant="outline" name="22h" />
            </div>
        </div>

        <h3 class="text-xl font-bold mt-1 group-hover:text-blue-600 transition-colors duration-300">{{ $job->title }}</h3>

        <div class="flex justify-between items-center mt-10">
            <p class="text-sm text-gray-500">{{ $job->schedule }} - From {{ $job->salary }}</p>

            <div class="space-x-1">
                @foreach($job->tags as $tag)
                    <x-tag :name="$tag->name" />
                @endforeach
            </div>
        </div>
    </div>
</div>
