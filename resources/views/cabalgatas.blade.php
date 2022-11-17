 {{-- SLIDE --}}
 <div class="back-cabalgatas bg-black flex items-center justify-center">
     <h1 class="text-white text-center text-4xl font-bold uppercase">Cabalgatas la limeña</h1>
 </div>
 @extends('layouts.app')

 @section('title', 'Cabalgatas')

 @section('content')
     <section class="container bg-limena-600">
         <div class="flex items-center justify-center flex-col py-10 ">
             <img src="{{ asset('img/brands/hoja-rosa.png') }}" class="items-center mx-5 h-40" alt="">
             <h1 class="text-center md:w-2/3 text-2xl md:text-4xl font-bold mt-4 text-limena-200">
                 CABALGATAS EN UN ESCENARIO ÚNICO
                 INMERSOS EN EL IMPONENTE PAISAJE
                 CORDILLERANO.
                 <br> ANIMATE A VIVIR LA EXPERIENCIA
             </h1>
         </div>
     </section>
     <section class="container">
        <div class="flex items-center justify-center flex-col py-10 ">
            <h1 class="text-justify  text-2xl md:text-4xl font-normal mt-4 text-limena-200">
                IMAGINA CAMBIAR DE ESCENARIO <br>
                EN TAN SOLO UN PAR DE HORAS
            </h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">

        </div>
     </section>
 @endsection
