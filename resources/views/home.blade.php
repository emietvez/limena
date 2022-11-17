@extends('layouts.app')

@section('content')
    <main class="container">
        <div class="flex items-center justify-center flex-col py-10">
            <img src="{{ asset('img/brands/flor.png') }}" class="items-center mx-5 h-40" alt="">
            <h1 class="text-center md:w-1/2 text-2xl md:text-4xl font-bold  text-limena-200">
                UN ESECENARIO UNICO AL PIE DE LA CORDILLERA DE LOS ANDES
            </h1>
        </div>

        {{-- TIERRAS BLANCAS --}}
        <div class="grid grid-cols-1 md:grid-cols-4 py-10">
            <div class="md:col-span-3 col-span-2">
                <img class="rounded-2xl md:w-full md:relative md:left-36" src="{{ asset('img/21.jpeg') }}" alt="">
            </div>
            <div class="grid place-content-center">
                <div class="md:relative right-36 md:w-[28rem] bg-white py-12 px-10 md:px-14  rounded-2xl shadow-lg ">
                    <h1 class="text-center font-bold text-3xl text-limena-200">TIERRAS BLANCAS</h1>
                    <p class="font-family-200 text-gray-500 py-4 text-lg font-medium">
                        20.000 hectáreas de increíbles paisajes que abarcan desde un campo
                        agreste y llano, hasta una imponente porción de la cordillera de los
                        Andes, al límite con Chile.
                    </p>
                    <div class="flex items-center justify-center">
                        <a href=""
                            class="w-full text-center tracking-[0.5rem] bg-limena-500 hover:bg-limena-400 duration-150 transition-all py-2 px-4 rounded-lg text-white">VER
                            MAS</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- FINCA LIMEÑA --}}
        <div class="grid grid-cols-1 md:grid-cols-4 py-10">
            <div class="md:hidden flex col-span-2">
                <img class="rounded-2xl" src="{{ asset('img/finca.jpg') }}" alt="">
            </div>
            <div class="grid place-content-center md:z-10">
                <div class="md:relative left-20 bg-white mx-auto py-12 px-10 md:px-14 rounded-2xl shadow-lg ">
                    <h1 class="text-center font-bold text-3xl text-limena-200">FINCA LA LIMEÑA</h1>
                    <p class="font-family-200 text-gray-500 py-4 text-md font-medium">
                        Este es el lugar de recepción donde los visitantes se preparan para
                        comenzar con la aventura. Un chalet antiguo es la antesala a una
                        verdadera travesía campestre única e inigualable.
                    </p>
                    <div class="flex items-center justify-center">
                        <a href=""
                            class="w-full text-center tracking-[0.5rem] bg-limena-500 hover:bg-limena-400 duration-150 transition-all py-2 px-4 rounded-lg text-white">VER
                            MAS</a>
                    </div>
                </div>
            </div>
            <div class="hidden md:flex md:col-span-3 col-span-2">
                <img class="rounded-2xl md:w-full md:relative md:right-36" src="{{ asset('img/finca.jpg') }}" alt="">
            </div>
        </div>

        {{-- CABALGATAS --}}
        <div class="grid grid-cols-1 md:grid-cols-4 py-10">
            <div class="md:col-span-3 col-span-2">
                <img class="rounded-2xl md:w-full md:relative md:left-36" src="{{ asset('img/3.jpeg') }}" alt="">
            </div>
            <div class="grid place-content-center">
                <div class="md:relative right-36 md:w-[28rem] bg-white py-16 px-8 rounded-2xl shadow-lg ">
                    <h1 class="text-center font-bold text-3xl text-limena-200">CABALGATAS LA LIMEÑA</h1>
                    <p class="font-family-200 text-gray-500 py-4 text-lg font-medium">
                        Disfrutá inolvidables cabalgatas inmersos en espectaculares paisajes
                        al pie de la cordillera de los Andes. Para vivir la experiencia no es
                        necesario tener experiencia, nuestros guias expertos seleccionaran el
                        caballo ideal para tu nivel.
                    </p>
                    <div class="flex items-center justify-center">
                        <a href=""
                            class="w-full text-center tracking-[0.5rem] bg-limena-500 hover:bg-limena-400 duration-150 transition-all py-2 px-4 rounded-lg text-white">VER
                            MAS</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- MOMENTOS DE AVENTURA --}}
        <div class="grid grid-cols-1 md:grid-cols-3 py-10">
            <div class="flex md:hidden col-span-2">
                <img class="rounded-2xl" src="{{ asset('img/bici.png') }}" alt="">
            </div>
            <div class="grid place-content-center md:z-10">
                <div class="md:relative left-20 bg-white py-12 px-6 rounded-2xl shadow-lg ">
                    <h1 class="text-center font-bold text-3xl text-limena-200">MOMENTOS DE AVENTURA</h1>
                    <p class="font-family-200 text-gray-500 py-4 text-lg font-medium">
                        Si sos amante del trekking o mountain bike, podrás disfrutar de una
                        travesía andina a los pies de los Andes. Circuitos con dificultad
                        técnica baja te invitan a explorar el paisaje.
                    </p>
                    <div class="flex items-center justify-center">
                        <a href=""
                            class="w-full text-center tracking-[0.5rem] bg-limena-500 hover:bg-limena-400 duration-150 transition-all py-2 px-4 rounded-lg text-white">VER
                            MAS</a>
                    </div>
                </div>
            </div>
            <div class="hidden md:flex col-span-2">
                <img class="rounded-2xl md:w-full md:relative md:right-36" src="{{ asset('img/bici.png') }}" alt="">
            </div>
        </div>

    </main>
@endsection
