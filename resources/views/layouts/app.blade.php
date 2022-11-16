<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finca Limeña | @yield('title') </title>
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
    <div class="back-home bg-black flex items-center justify-center">
        <h1 class="text-white text-4xl font-bold uppercase">Una aventura con alma de campo</h1>
    </div>
    <nav id="navbar" class="bg-white md:bg-transparent px-2 sm:px-4 py-4 md:py-2 fixed w-full z-20 top-0 left-0 ">
        <div class="container flex flex-wrap items-center justify-between md:justify-center mx-auto">
            <a href="#" class="flex items-center md:hidden">
                <img src="{{ asset('img/logo.png') }}" class="h-10 mr-3 sm:h-9" alt="Limeña Logo">
            </a>
            {{-- Hamburger menu --}}
            <div class="flex md:order-2">
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-white dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-center hidden w-full md:flex md:w-auto md:order-1 bg-white md:bg-transparent"
                id="navbar-sticky">
                <ul
                    class="flex flex-col items-center p-4 mt-4 bg-white md:bg-transparent md:p-0 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 ">
                    <li>
                        <a href="#" 
                            class="items block py-2 pl-3 pr-4 md:mx-4 uppercase text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:text-gray-200 hover:text-gray-800 transition-all duration-150  md:p-0">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="#" 
                            class="items flex py-2 pl-3 pr-4 md:mx-4 uppercase text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:text-gray-200 hover:text-gray-800 transition-all duration-150 md:p-0 md:dark:hover:text-white dark:text-gray-400">
                            Tierras Blancas
                        </a>
                    </li>
                    <li>
                        <a href="#" 
                            class="items flex py-2 pl-3 pr-4 md:mx-4 uppercase text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:text-gray-200 hover:text-gray-800 transition-all duration-150 md:p-0 md:dark:hover:text-white dark:text-gray-400">
                            La Limeña
                        </a>
                    </li>
                    <li>
                        <a href="#" id="logo-white" class="md:flex items-center hidden">
                            <img src="{{ asset('img/brands/logo-white.png') }}" class="h-28 mx-10" alt="Flowbite Logo">
                        </a>
                        <a href="#" id="logo-color" class="items-center hidden">
                            <img src="{{ asset('img/brands/logo-color.png') }}" class="h-28 mx-10" alt="Flowbite Logo">
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="items block py-2 pl-3 pr-4 md:mx-4 uppercase text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:text-gray-200 hover:text-gray-800 transition-all duration-150  md:p-0">
                            Cabalgatas
                        </a>
                    </li>
                    <li>
                        <a href="#" 
                            class="items block py-2 pl-3 pr-4 md:mx-4 uppercase text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:text-gray-200 hover:text-gray-800 transition-all duration-150  md:p-0">
                            Aventura
                        </a>
                    </li>
                    <li>
                        <a href="#" 
                            class="items flex py-2 pl-3 pr-4 md:mx-4 uppercase text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:text-gray-200 hover:text-gray-800 transition-all duration-150 md:p-0">
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="bg-gray-600 flex items-center justify-center py-10 text-gray-300">
        <div class="grid grid-cols-3">
            <div class="grid place-content-center grid-cols-1">
                <img src="{{ asset('img/logo-blanco.png') }}" alt="" class="h-24 mx-auto mb-4">
                <span class="text-center">Ruta 101 Km 17. Paredias, San Carlos <br> MENDOZA - ARGENTINA</span>
            </div>
            <div>

            </div>
            <div>

            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
