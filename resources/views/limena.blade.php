 {{-- SLIDE --}}
 <div class="back-limena bg-black flex items-center justify-center">
    <h1 class="text-white text-center text-2xl md:text-5xl font-bold uppercase">ESTANCIA TIERRAS BLANCAS</h1>
</div>
@extends('layouts.app')

@section('title', 'La Limeña')

@section('content')
    <section class="container bg-limena-600 pb-20">
        <div class="flex items-center justify-center flex-col py-20 ">
            <img src="{{ asset('img/brands/hoja-celeste.png') }}" class="items-center mx-5 h-40" alt="">
            <h1 class="text-center md:w-2/3 text-2xl md:text-4xl font-bold mt-4 text-limena-200">
                UN ANTIGUO CHALET SERÁ EL PUNTO DE 
                PARTIDA DE TU INOLVIDABLE AVENTURA
            </h1>
        </div>
        <div class="md:container flex items-center justify-center py-20">
            <p class="md:w-2/3 text-xl md:text-justify font-family-200 text-limena-200">
                Ubicada en el interior de la Estancia Tierras Blancas, Finca La Limeña con una extensión 
                de 160 hectáreas posee una increíble belleza, con bosques y arroyos que la convierten 
                en un lugar soñado para conectar con la naturaleza. Este es el lugar de recepción donde 
                los visitantes se preparan para comenzar con la aventura. En una antigua casona de 
                campo disfrutarás del desayuno de bienvenida y la media tarde que corona la jornada. 
                Este chalet antiguo es la antesala de la travesía campestre en la que el suave murmullo 
                del arroyo Yaucha invita a descansar y descubrir los secretos de la vida de campo.</b>
            </p>
        </div>
        @include('partials.slide-limena')
    </section>
    @include('partials.anuncio')
@endsection
