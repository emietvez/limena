 {{-- SLIDE --}}
 <div class="back-tierras bg-black flex items-center justify-center">
     <h1 class="text-white text-center text-2xl md:text-5xl font-bold uppercase">ESTANCIA TIERRAS BLANCAS</h1>
 </div>
 @extends('layouts.app')

 @section('title', 'Gastronomía')

 @section('content')
     <section class="container bg-limena-600 pb-20">
         <div class="flex items-center justify-center flex-col py-20 ">
             <img src="{{ asset('img/brands/hoja-verde.png') }}" class="items-center mx-5 h-40" alt="">
             <h1 class="text-center md:w-2/3 text-2xl md:text-4xl font-bold mt-4 text-limena-200">
                 20.000 HECTÁREAS RODEADAS DE
                 VALLES Y ARROYOS AL PIE DE LA
                 CORDILLERA DE LOS ANDES
             </h1>
         </div>
         <div class="md:container flex items-center justify-center py-20">
             <p class="md:w-2/3 text-xl md:text-justify font-family-200 text-limena-200">
                 La Estancia Tierras Blancas se encuentra ubicada al sur del departamento de San Carlos,
                 Mendoza, Argentina. Es una propiedad de Don Osvaldo Lima quien, en 1958, adquirió
                 20000 ha, las cuales abarcan desde un campo agreste y llano, hasta una imponente
                 porción de la majestuosa cordillera de los Andes, rodeada de valles y arroyos al límite
                 con Chile. Parte de este paño de tierras vírgenes es alcanzado por la Reserva Natural
                 Laguna del Diamante; uno de los centros turísticos más emblemáticos de la provincia.</b>
             </p>
         </div>

         @include('partials.slide-tierras')



         <div class="md:container flex items-center justify-center py-20">
             <p class="md:w-2/3 text-xl md:text-justify font-family-200 text-limena-200">
                 La Estancia Tierras Blancas se encuentra ubicada al sur del departamento de San Carlos,
                 Mendoza, Argentina. Es una propiedad de Don Osvaldo Lima quien, en 1958, adquirió
                 20000 ha, las cuales abarcan desde un campo agreste y llano, hasta una imponente
                 porción de la majestuosa cordillera de los Andes, rodeada de valles y arroyos al límite
                 con Chile. Parte de este paño de tierras vírgenes es alcanzado por la Reserva Natural
                 Laguna del Diamante; uno de los centros turísticos más emblemáticos de la provincia.</b>
             </p>
         </div>
     </section>

 @endsection
