<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="max-w-[2000px] mx-auto text-neutral-900 bg-white dark:text-neutral-200 dark:bg-neutral-800">
    <nav class="mx-auto p-4 bg-amber-400">
        <div class="container mx-auto flex items-center justify-between">
            <a href="{{ url('/') }}"
                class="focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 lg:absolute lg:left-1/2 lg:-translate-x-1/2 lg:top-9 z-50 hover:opacity-75 transition-opacity"
                aria-label="Go to homepage">
                <img src="{{ url('assets/img/logo.svg') }}" width="200" class="w-48 md:w-64 lg:w-72"
                    alt="Home Smart Logo" />
            </a>
            <button id="menu"
                class="lg:hidden focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 text-neutral-900 hover:to-neutral-600 transition-colors"
                aria-expanded="false" aria-label="Open Menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
            <div role="menubar"
                class="hidden flex-col gap-4 absolute right-0 left-0 top-16 bg-amber-400 shadow-xl text-center p-6 text-lg items-center lg:flex lg:flex-row lg:static lg:shadow-none lg:justify-between lg:w-full">
                <a role="menuitem"
                    class="py-1 px-6 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 text-neutral-900 hover:to-neutral-600 transition-colors dark:text-neutral-900 lg:mr-auto"
                    href={{ url('/') }}>
                    Home
                </a>
                <a role="menuitem"
                    class="py-1 px-6 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 text-neutral-900 hover:to-neutral-600 transition-colors dark:text-neutral-900"
                    href={{ url('/') }}>
                    Contact
                </a>
                <a role="menuitem"
                    class="py-1 px-6 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 text-neutral-900 hover:to-neutral-600 transition-colors dark:text-neutral-900"
                    href={{ url('/') }}>
                    Login
                </a>
                <a role="menuitem"
                    class="py-2 px-6 bg-teal-900 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-md ring-offset-4 ring-offset-amber-400 text-white shadow-xl hover:shadow-none hover:to-neutral-600 transition-shadow dark:text-neutral-900"
                    href={{ url('/') }}>
                    Sign Up
                </a>
            </div>
        </div>
    </nav>
    <header class="relative pt-16 md:pt-24 lg:pt-48">
        <div
            class="absolute inset-0 bottom-8 md:bottom-24 xl:bottom-32 -z-10 bg-gradient-to-b from-amber-400 to-amber-600">
        </div>
        <div class="container mx-auto grid grid-rows-1 place-items-end px-2">
            <img src="{{ url('assets/img/couch.png') }}" class="row-start-1 row-end-2 col-start-1 col-end-2 mx-auto "
                alt="couch" />
            <img src="{{ url('assets/img/app.svg') }}"
                class="row-start-1 row-end-2 col-start-1 col-end-2 mx-auto w-40 sm:w-52 md:w-64 lg:w-72"alt="app" />
        </div>
    </header>
</body>

</html>
