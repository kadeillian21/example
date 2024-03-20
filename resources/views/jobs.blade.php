<x-layout>
    <x-slot:heading>
        About Page
    </x-slot:heading>

    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/1">
                <strong>{{ $job['title'] }}:</strong> pays {{ $job['salary'] }} per year
            </a>
        </li>
    @endforeach
</x-layout>