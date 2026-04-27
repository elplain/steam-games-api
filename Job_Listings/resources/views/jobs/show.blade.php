<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

    <h3>Employer: {{ $job->employer->name }}</h3>
    <p>
        This job pays £{{ $job['salary'] }} per year. <br>
        This vacancy has @choice('Rating|Ratings', $job->ratings):
        @foreach ($job->ratings as $rating)
            {{ $rating['score'] }} {{ $loop->last ? '' : ' ,' }}
        @endforeach out of 10 (where 10 is the highest)
    </p>
    <p>
        <a href="/jobs/{{$job->id}}/edit">Edit Job</a>
    </p>
</x-layout>
