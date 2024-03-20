<x-layout>
    <x-slot:heading>
        About Page
    </x-slot:heading>

    <h2>{{ $job['title']}}
    <p>
        This job pays {{ $job['salary']}} per year.
    </p>
</x-layout>
