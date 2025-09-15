<x-layout>
    <x-slot:heading>
        Edit JOB : {{ $job->title }}
    </x-slot:heading>

    <div>
        <form method="PATCH" action="/jobs/{{$job->id}}">
            @csrf
            <div class="space-y-12 bg-gray-400">
                <div class="border-b border-white/10 pb-12">
                   <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
                            <div class="mt-2 border">
                                <input id="title" type="text" value="{{ $job->title }}" name="title" placeholder="janesmith" class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                            </div>
                            @error('title')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="col-span-full">
                            <label for="salary" class="block text-sm/6 font-medium text-white">Salary</label>
                            <div class="mt-2 border">
                                <input id="salary" name="salary" value="{{ $job->salary }}" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></input>
                            </div>
                             @error('salary')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- @if ($errors->any())
                  @foreach ($errors as $error )
                  <li>{{ $error }}</li>
                  @endforeach
                @endif -->
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a form="delete-form" href="/jobs/{{ $job->id }}" type="button" class="bg-red-500 p-2 rounded font-semibold text-red-500">Delete</a>
                <a href="/jobs/{{ $job->id }}" type="button" class="bg-red-500 p-2 rounded font-semibold text-white">Cancel</a>
                <a href="/jobs/{{ $job->id }}" type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</a>
            </div>
        </form>
        <form method="DELETE" action="/jobs/{{$job->id}}" id="delete-form" class="hidden">
            @csrf 
                         
        </form>
    </div>
</x-layout>