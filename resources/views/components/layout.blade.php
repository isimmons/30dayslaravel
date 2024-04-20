<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ url('/red-panda.svg') }}">
    <title>{{ $title ?? config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased  h-full">

<div class="min-h-full dark:bg-slate-800 dark:text-slate-300">
    <nav class="bg-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-8 w-8" src="{{ url("/red-panda.svg") }}" alt="Laracasts">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <x-ui.nav-link href="/" :active="request()->is('/')">Home</x-ui.nav-link>
                            <x-ui.nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-ui.nav-link>
                            <x-ui.nav-link href="/contact" :active="request()->is('contact')">Contact</x-ui.nav-link>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">

                        @guest()
                            <x-ui.nav-link href="/login" :active="request()->is('login')">Log In</x-ui.nav-link>
                            <x-ui.nav-link href="/register" :active="request()->is('register')">Register</x-ui.nav-link>
                        @endguest

                        @auth()
                            <form action="/logout" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-ui.form-button>Log Out</x-ui.form-button>
                            </form>
                        @endauth

                        <!-- Profile dropdown -->
                        @auth()
                            <div class="relative ml-3">
                                <div>
                                    <button type="button"
                                            class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-amber-600 focus:ring-offset-2 focus:ring-offset-gray-800"
                                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <img class="size-10 rounded-full"
                                             src="https://gravatar.com/avatar/8a1346829a164648a4507019f3dc3875?size=256&cache=1711517210575"
                                             alt="">
                                    </button>
                                </div>
                            </div>
                        @endauth
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button"
                            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                   aria-current="page">Home</a>
                <a href="/jobs"
                   class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">jobs</a>
                <a href="/contact"
                   class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Contact</a>
            </div>
            <div class="border-t border-gray-700 pb-3 pt-4">
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full"
                             src="https://gravatar.com/avatar/8a1346829a164648a4507019f3dc3875?size=256&cache=1711517210575"
                             alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium leading-none text-white">Ian Simmons</div>
                        <div class="text-sm font-medium leading-none text-gray-400">foo@example.com</div>
                    </div>

                </div>

            </div>
        </div>
    </nav>

    <header class="bg-slate-50 shadow dark:bg-slate-800 dark:shadow-slate-500">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-slate-200">{{ $heading }}</h1>

            @auth()
                <x-ui.button-link href="/jobs/create">Create Job</x-ui.button-link>
            @endauth
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
</div>

</body>
</html>
