<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Cabalgatas al pie de la Cordillera de Los Andes y a pocos kilómetros de la reserva natural Laguna del Diamante. Viví la experiencia de cabalgar entre arroyos y montaña." />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/apple-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/apple-icon-60x60.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-icon-76x76.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/apple-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/apple-icon-152x152.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-icon-180x180.png') }}" />
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/favicon/android-icon-192x192.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/favicon-96x96.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}" />
   
    <title>Finca Limeña | @yield('title') </title>
    {{-- Scripts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.3/js/splide.min.js"
        integrity="sha512-pW7662Lx7iEjWjtL4UOJ0LLLxunDebMCR4J5OhYpAA/lJO3AEfnbiQu1Mp4RR16HZl5dSj1Nc8Bsjgw9N0bwhQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- STYLES --}}
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.3/css/splide.min.css"
        integrity="sha512-KhFXpe+VJEu5HYbJyKQs9VvwGB+jQepqb4ZnlhUF/jQGxYJcjdxOTf6cr445hOc791FFLs18DKVpfrQnONOB1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    {{-- SOLAPA --}}
    <div class="fixed top-56 right-0 z-40 bg-white py-6 rounded-l-xl shadow-lg grid place-content-center">
        <button id="dropdownLeftButton" data-dropdown-toggle="dropdownLeft" data-dropdown-placement="left"
            class="md:mb-0 px-3 text-black focus:ring-0 focus:outline-none focus:ring-limena-200 font-medium text-sm  text-center inline-flex items-center "
            type="button">
            <i class="fa-solid fa-globe text-limena-200 hover:text-black"></i>
        </button>
        <a href="https://www.tripadvisor.com.ar/Attraction_Review-g3382265-d25037050-Reviews-Finca_La_Limena_Horseback_Riding_Adventures-San_Carlos_Province_of_Mendoza_Cuyo.html"
            class="flex items-center justify-center">
            <img class="h-3  rounded-full mt-3" src="{{ asset('img/brands/trip-negro.png') }}" alt="">
        </a>
        <a href="https://www.instagram.com/fincalalimena/" class="flex items-center justify-center"><i
                class="font-semibold text-limena-200 fa-brands fa-instagram mt-3"></i>
        </a>
        <a href="https://wa.me/542616155442" class="flex items-center justify-center"><i
                class="font-semibold text-limena-200 fa-brands fa-whatsapp mt-3"></i>
        </a>
    </div>
    <div id="dropdownLeft" class="hidden z-40 w-28 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLeftButton">
            <li>
                <a href="#"
                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">English</a>
            </li>
            <li>
                <a href="#"
                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Portugues</a>
            </li>
            <li>
                <a href="#"
                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Español</a>
            </li>

        </ul>
    </div>



    {{-- NAVEGADOR --}}
    <nav id="navbar"
        class="bg-white md:bg-transparent px-2 sm:px-4 py-4 md:py-2 fixed w-full z-40 top-0 left-0 shadow-none">
        <div class="container flex flex-wrap items-center justify-between md:justify-center mx-auto">
            <a href="/" class="flex items-center md:hidden">
                <img src="{{ asset('img/brands/logo.png') }}" class="h-10 mr-3 sm:h-9" alt="Limeña Logo">
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
                    class="flex flex-col items-center p-4 mt-4 bg-white md:bg-transparent md:p-0 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 ">
                    <li >
                        <a href="/" style="{{ (request()->routeIs('home')) ? 'border-bottom: 1px solid #fff;' : 'border-bottom: 1px solid transparent' }}"
                            class="{{ (request()->routeIs('home')) ? 'font-bold' : 'font-medium' }} items block py-2 pl-3 pr-4 md:mx-4 uppercase text-gray-700  hover:bg-gray-100 md:hover:bg-transparent md:text-gray-200 hover:text-gray-800 transition-all duration-150  md:p-0">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tierrasblancas') }}" style="{{ (request()->routeIs('tierrasblancas')) ? 'border-bottom: 1px solid #fff;' : 'border-bottom: 1px solid transparent' }}"
                            class="{{ (request()->routeIs('tierrasblancas')) ? 'font-bold' : 'font-medium' }} items flex py-2 pl-3 pr-4 md:mx-4 uppercase text-gray-700  hover:bg-gray-100 md:hover:bg-transparent md:text-gray-200 hover:text-gray-800 transition-all duration-150 md:p-0 md:dark:hover:text-white dark:text-gray-400">
                            Tierras Blancas
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('limena') }}" style="{{ (request()->routeIs('limena')) ? 'border-bottom: 1px solid #fff;' : 'border-bottom: 1px solid transparent' }}"
                            class="{{ (request()->routeIs('limena')) ? 'font-bold' : 'font-medium' }} items flex py-2 pl-3 pr-4 md:mx-4 uppercase text-gray-700 hover:bg-gray-100 md:hover:bg-transparent md:text-gray-200 hover:text-gray-800 transition-all duration-150 md:p-0 md:dark:hover:text-white dark:text-gray-400">
                            La Limeña
                        </a>
                    </li>
                    <li>
                        <a href="/" id="logo-white" class="md:flex items-center hidden">
                            <img src="{{ asset('img/brands/logo-white.png') }}" class="h-36 mx-10"
                                alt="Limeña Logo">
                        </a>
                        <a href="/" id="logo-color" class="items-center hidden">
                            <img src="{{ asset('img/brands/flor.png') }}" class="h-10 mx-10" alt="Limeña Logo">
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cabalgatas') }}" style="{{ (request()->routeIs('cabalgatas')) ? 'border-bottom: 1px solid #fff;' : 'border-bottom: 1px solid transparent' }}"
                            class="{{ (request()->routeIs('cabalgatas')) ? 'font-bold' : 'font-medium' }} items block py-2 pl-3 pr-4 md:mx-4 uppercase text-gray-700 hover:bg-gray-100 md:hover:bg-transparent md:text-gray-200 hover:text-gray-800 transition-all duration-150  md:p-0">
                            Cabalgatas
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('aventura') }}" style="{{ (request()->routeIs('aventura')) ? 'border-bottom: 1px solid #fff;' : 'border-bottom: 1px solid transparent' }}"
                            class="{{ (request()->routeIs('aventura')) ? 'font-bold' : 'font-medium' }} items block py-2 pl-3 pr-4 md:mx-4 uppercase text-gray-700 hover:bg-gray-100 md:hover:bg-transparent md:text-gray-200 hover:text-gray-800 transition-all duration-150  md:p-0">
                            Aventura
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gastronomia') }}" style="{{ (request()->routeIs('gastronomia')) ? 'border-bottom: 1px solid #fff;' : 'border-bottom: 1px solid transparent' }}"
                            class="{{ (request()->routeIs('gastronomia')) ? 'font-bold' : 'font-medium' }} items flex py-2 pl-3 pr-4 md:mx-4 uppercase text-gray-700 hover:bg-gray-100 md:hover:bg-transparent md:text-gray-200 hover:text-gray-800 transition-all duration-150 md:p-0">
                            Gastronomía
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- PAGES --}}
    @yield('content')

    {{-- FOOTER --}}
    <footer class="bg-gray-600 flex items-center justify-center py-10 text-gray-300">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-24">
            <div class="grid place-content-center grid-cols-1">
                <img src="{{ asset('img/brands/logofooter.png') }}" alt="" class="h-28 mx-auto mb-4">
                <span class="text-center">Ruta 101 Km 17. Pareditas, San Carlos <br> MENDOZA - ARGENTINA</span>
                <a href="https://wa.me/542616155442" class="text-center text-lg text-semibold">
                    <i class="fa-brands fa-whatsapp text-xl pr-2"></i>+542616155442
                </a>
            </div>
            <div class="grid place-content-center grid-cols-1 py-8 px-4 border border-gray-200">
                <form action="{{route('footerContact')}}" class="grid gap-6" method="POST">
                    @csrf
                    <h2 class="text-center text-lg uppercase">Contacto</h2>
                    <input type="text" name="nombre" placeholder="Nombre / Name" id="" class="text-black">
                    {!! $errors->first('nombre', '<small class="text-red-800 pt-1">:message</small>') !!} 
                    <input type="text" name="email" placeholder="E-mail" id=""  class="text-black">
                    {!! $errors->first('email', '<small class="text-red-800 pt-1">:message</small>') !!}
                    <div class="flex items-center justify-center">
                        <button type="submit" class="py-2 px-4 border rounded-full">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="flex items-center justify-center">
                <img src="{{ asset('img/brands/trip-footer.png') }}" alt="" class="h-36">
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
