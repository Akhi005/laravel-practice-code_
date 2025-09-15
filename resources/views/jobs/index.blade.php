<x-layout>
    <x-slot:heading>
        JOB
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
           <li><a href="/jobs/{{ $job['id'] }}">{{$job['id'].'=>'.$job['title']."   salary->".$job['salary']}}</a></li>
      
           @endforeach
    </ul>
   <div>
     {{ $jobs->links() }}
   </div>
</x-layout>