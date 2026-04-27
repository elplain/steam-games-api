<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            
                <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                 </svg>

                <a href="/jobs/{{ $job->id }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                    <div class="font-bold text-blue-500 text-sm">{{ optional($job->employer)->name ?? 'Unknown Employer' }}</div>
                    <div>
                    <strong>{{ $job->title }}:</strong> Pays £{{ $job->salary }} per year.
                    </div>
            
            
                Employer:[{{ optional($job->employer)->name ?? 'Unknown Employer' }}]
            
            
                @choice('Rating|Ratings', $job->ratings): @foreach ($job->ratings as $rating)
                                                            {{ $rating['score'] }} {{ $loop->last ? '' : ' ,' }}
                                                        @endforeach
            
        @endforeach
        <div>
            {{$jobs->links()}}
        </div>
</div>
    {{ $jobs->links() }}
</x-layout>
