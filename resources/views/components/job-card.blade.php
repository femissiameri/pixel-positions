@props(['job'])

<div class="p-4 bg-white/5 hover:bg-white/10 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-600 transition-colors duration-300 cursor-pointer group">
    <div class="self-start text-sm font-medium">{{ $job->employer->name }}</div>
    <div class="py-8 px-8">
        <h3 class="text-xl font-bold group-hover:text-blue-600 transition-colors duration-300">{{ $job->title }}</h3>
        <p class="text-sm mt-4">{{ $job->schedule }} - From {{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-end mt-auto gap-8">
        <div class="flex flex-wrap justify-start gap-1">
            @foreach($job->tags as $tag)
                <x-tag :name="$tag->name" />
            @endforeach
        </div>
        <x-employer-logo :employer="$job->employer" size="sm" />
    </div>
</div>
