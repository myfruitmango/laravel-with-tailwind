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
    <script type="module" src="{{ url('assets/main.js') }}"></script>
</body>

</html>
