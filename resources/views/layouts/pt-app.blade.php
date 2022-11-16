<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finca Limeña</title>
    {{-- Scripts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.3/js/splide.min.js"
        integrity="sha512-pW7662Lx7iEjWjtL4UOJ0LLLxunDebMCR4J5OhYpAA/lJO3AEfnbiQu1Mp4RR16HZl5dSj1Nc8Bsjgw9N0bwhQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- STYLES --}}
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.3/css/splide.min.css"
        integrity="sha512-KhFXpe+VJEu5HYbJyKQs9VvwGB+jQepqb4ZnlhUF/jQGxYJcjdxOTf6cr445hOc791FFLs18DKVpfrQnONOB1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>

<body>
    <div class="sticky z-50 bg-white w-full top-0">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 ">
            <div
                class="flex items-center justify-between border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#">
                        <span class="sr-only">La limeña</span>
                        <img class="h-8 w-auto sm:h-10" src="{{ asset('img/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="-my-2 -mr-2 md:hidden">
                    <a id="btnMenu"
                        class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/bars-3 -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </a>
                </div>
                <nav class="hidden space-x-10 md:flex ">
                    <a href="/pt" class="text-base font-medium text-gray-500 hover:text-gray-900">COMEÇO</a>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">TERRAS BRANCAS</a>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">LA LIMEÑA</a>
                    <a href="/pt/passeios" class="text-base font-medium text-gray-500 hover:text-gray-900">PASSEIO</a>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">AVENTURA</a>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">CONTATO</a>

                </nav>
                <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
                    <div class="dropdown cursor-pointer mr-20">
                        <a id="drop-len" 
                            class="whitespace-nowrap text-2xl font-medium text-gray-500  hover:hover:text-gray-900">
                            <i class="fa-solid fa-globe"></i>
                        </a>
                        <ul id="drop-menu" class="dropdown-menu
                        min-w-max
                        absolute
                        hidden
                        bg-white
                        text-base
                        z-50
                        right-32
                        py-2
                        list-none
                        text-left
                        rounded-lg
                        shadow-lg
                        mt-1
                        m-0
                        bg-clip-padding
                        border-none"
                            >
                            <li>
                                <a class="dropdown-item text-sm py-2 px-4 font-normal block hover:text-gray-900  w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                    href="/en">
                                    English
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-sm py-2 px-4 font-normal block hover:text-gray-900 w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                    href="/">
                                    Espanhol
                                </a>
                        </ul>
                    </div>
                    <a href="#"
                        class="text-center w-10 whitespace-nowrap text-2xl font-medium text-gray-500 hover:text-gray-900">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#"
                        class="pl-1 w-7 hover:scale-105 whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                        <img src="{{ asset('img/trap.png') }}" alt="">
                    </a>

                </div>
            </div>
        </div>

        <div id="menu"
            class="hidden absolute z-10 inset-x-0 top-0 origin-top-right transform p-2 transition md:hidden">
            <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                <div class="px-5 pt-5 pb-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <img class="h-8 w-auto" src="{{ asset('img/logo.png') }}" alt="Limeña">
                        </div>
                        <div class="-mr-2">
                            <a id="btnClose"
                                class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: outline/x-mark -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="mt-6">
                        <nav class="grid gap-y-8">
                            <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">Analytics</span>
                            </a>

                            <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                                <!-- Heroicon name: outline/cursor-arrow-rays -->
                                <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">Engagement</span>
                            </a>

                            <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                                <!-- Heroicon name: outline/shield-check -->
                                <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">Security</span>
                            </a>

                            <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                                <!-- Heroicon name: outline/squares-2x2 -->
                                <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">Integrations</span>
                            </a>

                            <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                                <!-- Heroicon name: outline/arrow-path -->
                                <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12c0-1.232.046-2.453.138-3.662a4.006 4.006 0 013.7-3.7 48.678 48.678 0 017.324 0 4.006 4.006 0 013.7 3.7c.017.22.032.441.046.662M4.5 12l-3-3m3 3l3-3m12 3c0 1.232-.046 2.453-.138 3.662a4.006 4.006 0 01-3.7 3.7 48.657 48.657 0 01-7.324 0 4.006 4.006 0 01-3.7-3.7c-.017-.22-.032-.441-.046-.662M19.5 12l-3 3m3-3l3 3" />
                                </svg>
                                <span class="ml-3 text-base font-medium text-gray-900">Automations</span>
                            </a>
                        </nav>
                    </div>
                </div>
                <div class="space-y-6 py-6 px-5">
                    <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Pricing</a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Docs</a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Help
                            Center</a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Guides</a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Events</a>

                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Security</a>
                    </div>
                    <div>
                        <a href="#"
                            class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign
                            up</a>
                        <p class="mt-6 text-center text-base font-medium text-gray-500">
                            Existing customer?
                            <a href="#" class="text-indigo-600 hover:text-indigo-500">Sign in</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @yield('content')
    <script>
        var splide = new Splide('.splide');
        splide.mount();
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
