<x-layout>
    <x-slot:heading>
        JOB
    </x-slot:heading>
    <ul>
        <li>{{$job['id'].'=>'.$job['title']."salary->". $job['salary'] }}
        <a class="bg-blue-300 border p-2 rounded" href="/jobs/{{ $job->id }}/edit">Edit</a> </li>
    </ul>
</x-layout>