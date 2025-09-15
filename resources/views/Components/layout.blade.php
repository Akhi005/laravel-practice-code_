<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="min-h-full">
        <nav class="bg-gray-800/50">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                 <x-nav-link href="/"  :active="request()->is('/')">Home</x-nav-link>
                                 <x-nav-link href="/about" id="about" :active="request()->is('about')">About </x-nav-link>
                                 <x-nav-link href="/contact"  :active="request()->is('contact')">Contact </x-nav-link>
                                 <x-nav-link href="/jobs"  :active="request()->is('jobs')">Jobs </x-nav-link>
                            </div>
                        </div>
                    </div>
        </nav>

        <header class="relative flex mx-auto bg-gray-800 after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-white">{{$heading}}</h1>
            </div>
            <div>
                <a href="/jobs/create" class="border text-white font-semibold border-2 p-2 relative rounded">Create Job</a>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{$slot}}
            </div>
        </main>
    </div>

</body>

</html>