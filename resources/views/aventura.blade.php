 {{-- SLIDE --}}
 <div class="back-aventura bg-black flex items-center justify-center">
     <h1 class="text-white text-center text-2xl md:text-5xl font-bold uppercase">Elegí tu aventura</h1>
 </div>
 @extends('layouts.app')

 @section('title', 'Aventura')

 @section('content')
     <section class="container bg-limena-600 pb-20">
         <div class="flex items-center justify-center flex-col py-20 ">
             <img src="{{ asset('img/brands/hoja-blanca.png') }}" class="items-center mx-5 h-40" alt="">
             <h1 class="text-center md:w-2/3 text-2xl md:text-4xl font-bold mt-4 text-limena-200">
                 SI SOS AMANTE DE LA AVENTURA
                 PODRÁS DISFRUTAR DE UNA TRAVESÍA
                 ANDINA A LOS PIES DE LOS ANDES.
             </h1>
         </div>

         <div class="grid grid-cols-1 md:grid-cols-2 md:mx-40 bg-white gap-6 rounded-xl text-limena-200">
             <div class=" py-10 md:py-20 md:pl-10 px-10">
                 <h2 class="uppercase text-4xl pb-4">Mountain Bike</h2>
                 <p class="font-family-200">
                     Si sos amante de las dos ruedas, contamos con un
                     circuito con dificultad técnica baja, una gran
                     oportunidad para explorar el paisaje agreste de esta
                     Estancia única. <br>
                     Las posibilidades para la aventura en MTB son
                     infinitas. Tendrás tú mismo la oportunidad de elegir
                     entre los circuitos disponibles al aire libre y en
                     contacto con el entorno natural.
                 </p>
                 <div class="flex items-center justify-center pt-10">
                     <a href="{{route('contacto')}}"
                         class="w-full text-center font-bold uppercase tracking-[0.5rem] bg-limena-500 hover:bg-limena-400 duration-150 transition-all py-3 px-4 rounded-lg text-white">
                         Contáctanos
                     </a>
                 </div>
             </div>
             <div class="flex items-center md:px-10 md:pb-0 px-10 pb-6">
                 <img src="{{ asset('img/bici.jpg') }}" class="rounded-full" alt="">
             </div>
         </div>
         <div class="grid grid-cols-1 md:grid-cols-2 md:mx-40 bg-white gap-6 rounded-xl mt-20 text-limena-200">
             <div class="py-16 md:pl-10 px-10">
                 <h2 class="uppercase text-4xl pb-4">Trekking</h2>
                 <p class="font-family-200">
                     El trekking es una de las actividades fundamentales
                     cuando de montaña se trata. Caminar por el paisaje
                     del valle que te permitirá encontrar un clima de
                     absoluto relax al mismo tiempo que, entre paso y
                     paso, descubrirás la belleza natural del lugar.
                     Podrá disfrutar también, de un safari fotográfico
                     entre valles y lomadas y, por supuesto, sorprenderte
                     con el avistamiento de la flora y la fauna salvaje que
                     se esconde en la Estancia.
                 </p>
                 <div class="flex items-center justify-center pt-4">
                     <a href="{{route('contacto')}}"
                         class="w-full text-center font-bold uppercase tracking-[0.5rem] bg-limena-500 hover:bg-limena-400 duration-150 transition-all py-3 px-4 rounded-lg text-white">
                         Contáctanos
                     </a>
                 </div>
             </div>
             <div class="flex items-center md:pr-8 py-6 px-10">
                 <img src="{{ asset('img/trek.jpg') }}" class="rounded-full" alt="">
             </div>
         </div>
     </section>
     @include('partials.anuncio')

 @endsection
