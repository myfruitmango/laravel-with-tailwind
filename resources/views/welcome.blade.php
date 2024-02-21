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
        <section aria-label="qualities" class="relative">
            <img src="{{ url('assets/img/dots.svg') }}" alt="dots"
                class="hidden lg:block absolute top-1/2 -translate-y-1/2 -left-24 xl:-left-7"aria-hidden="true" />
            <img src="{{ url('assets/img/dots.svg') }}" alt="dots"
                class="hidden lg:block absolute top-1/2 -translate-y-1/2 -right-24 xl:-right-7"aria-hidden="true" />
            <h2 id="qualities" class="sr-only">Our Qualities</h2>
            <div
                class="container mx-auto max-w-5xl flex gap-12 flex-wrap items-start justify-center md:justify-between">
                <div class="grid gap-4 justify-items-center text-center md:flex-1">
                    <div class="rounded-full border-8 border-amber-400 p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-14 h-14">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold">Safe</h3>
                    <p>Our Products are secure and private out-of-the-box</p>
                </div>
                <div class="grid gap-4 justify-items-center text-center md:flex-1">
                    <div class="rounded-full border-8 border-amber-400 p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold">Efficient</h3>
                    <p>Feel good about your wallet and the environment</p>
                </div>
                <div class="grid gap-4 justify-items-center text-center md:flex-1">
                    <div class="rounded-full border-8 border-amber-400 p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold">Proven</h3>
                    <p>Leading the Smart Home world for 10 years</p>
                </div>
            </div>
        </section>
        <section aria-labelledby="partners" class="text-center grid gap-8 place-items-center">
            <div class="grid gap-4">
                <h2 id="partners" class="text-4xl font-bold text-amber-400">Our Partners</h2>
                <p class="w-full max-w-lg">
                    We’ve partnered with hundreds of smart home brands to help you create a smart home that fits your
                    needs and doesn’t lock
                    you in.
                </p>
            </div>
            <div class="flex flex-wrap justify-center gap-2 md:gap-x-16 max-w-2xl mx-auto">
                <div class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
                    <img src="{{ url('assets/img/partner1.svg') }}" alt="Partner" class="h-16 w-16">
                </div>
                <div class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
                    <img src="{{ url('assets/img/partner2.svg') }}" alt="Partner" class="h-16 w-16">
                </div>
                <div class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
                    <img src="{{ url('assets/img/partner3.svg') }}" alt="Partner" class="h-16 w-16">
                </div>
                <div class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
                    <img src="{{ url('assets/img/partner4.svg') }}" alt="Partner" class="h-16 w-16">
                </div>
                <div class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
                    <img src="{{ url('assets/img/partner5.svg') }}" alt="Partner" class="h-16 w-16">
                </div>
                <div class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
                    <img src="{{ url('assets/img/partner6.svg') }}" alt="Partner" class="h-16 w-16">
                </div>
                <div class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
                    <img src="{{ url('assets/img/partner7.svg') }}" alt="Partner" class="h-16 w-16">
                </div>
            </div>
        </section>
    </main>
</body>

</html>
