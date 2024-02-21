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
                class="hidden z-40 flex-col gap-4 absolute right-0 left-0 top-16 bg-amber-400 shadow-xl text-center p-6 text-lg items-center lg:flex lg:flex-row lg:static lg:shadow-none lg:justify-between lg:w-full">
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
    <main class="grid gap-12 sm:gap-16 md:gap-24 lg:gap-32 px-8 overflow-hidden">
        <a href="#"
            class="py-2 px-6 bg-amber-400 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-md ring-offset-4 ring-offset-white dark:ring-offset-neutral-800 dark:ring-amber-400 mx-auto my-12 flex gap-2 shadow-xl hover:shadow-none hover:to-neutral-600 transition-shadow dark:text-neutral-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
            </svg>
            <span>Download The App</span>
        </a>
    </main>
</body>

</html>
