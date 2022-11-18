 {{-- SLIDE --}}
 <div class="back-gastronomia bg-black flex items-center justify-center">
     <h1 class="text-white text-center text-2xl md:text-5xl font-bold uppercase">Nuestra gastronomía</h1>
 </div>
 @extends('layouts.app')

 @section('title', 'Gastronomía')

 @section('content')
     <section class="container bg-limena-600 pb-20">
         <div class="flex items-center justify-center flex-col py-20 ">
             <img src="{{ asset('img/brands/hoja-blanca.png') }}" class="items-center mx-5 h-40" alt="">
             <h1 class="text-center md:w-2/3 text-2xl md:text-4xl font-bold mt-4 text-limena-200">
                 UN SABROSO MENÚ TRADICIONAL
                 ARGENTINO PARA CORONAR TU <br>
                 EXPERIENCIA
             </h1>
         </div>
         <div class="md:container flex items-center justify-center py-20">
             <p class="md:w-2/3 text-xl md:text-justify font-family-200 text-limena-200">
                 Un característico asado a las brasas acompañado de verduras y exquisitas ensaladas, el
                 desayuno y la mediatarde de campo, siempre listos para deleitar tu paladar con los
                 mejores sabores tradicionales del país y, sobre todo, de la región cuyana.
                 Tenemos disponible otras opciones, sencillamente, porque nos acomodamos a los
                 requerimientos de cada visitante. <br>
                 <b>En caso de optar por comida vegetariana, vegana, celíaca o cualquier otra variedad;
                     será indispensable dar aviso en el momento de realizar la reserva.</b>
             </p>
         </div>

         <div class="grid grid-cols-1 md:grid-cols-2 md:mx-40 bg-white gap-6 rounded-xl text-limena-200">
             <div class=" py-10 md:py-20 md:pl-10 px-10">
                 <h2 class="uppercase text-3xl pb-4">ALMUERZO TRADICIONAL
                     DE CAMPO</h2>
                 <p class="font-family-200">
                     Picada de fiambres de calidad, asado tradicional
                     campestre, verduras asadas y variedad de ensaladas
                     acompañado de los mejores varietales del Valle de
                     Uco. Nuestros postres te sorprenderán con las
                     tìpicas recetas de la abuela. En caso de desearlo,
                     brindamos otras variedades de menú. Solo nos lo
                     tenes que hacer saber y nos adaptamos a tus
                     necesidades.
                 </p>
                 {{-- <div class="flex items-center justify-center pt-10">
                     <a href=""
                         class="w-full text-center font-bold uppercase tracking-[0.5rem] bg-limena-500 hover:bg-limena-400 duration-150 transition-all py-3 px-4 rounded-lg text-white">
                         Contáctanos
                     </a>
                 </div> --}}
             </div>
             <div class="flex items-center md:px-10 px-10 pb-6 py-10">
                 <img src="{{ asset('img/vino.jpg') }}" class="rounded-full" alt="">
             </div>
         </div>
         <div class="grid grid-cols-1 md:grid-cols-2 md:mx-40 bg-white gap-6 rounded-xl mt-20 text-limena-200">
             <div class="py-16 md:pl-10 px-10">
                 <h2 class="uppercase text-4xl pb-4">DESAYUNO Y
                     MEDIA TARDE
                     DE CAMPO</h2>
                 <p class="font-family-200">
                     Disfrutarás estas delicias caseras
                     preparadas especialmente para satisfacer a
                     los paladares más exigentes.
                     Café, té, mate, jugos naturales, frutas,
                     tostadas, pan casero, exquisitos dulces
                     caseros, etc.
                 </p>
                 {{-- <div class="flex items-center justify-center pt-4">
                     <a href=""
                         class="w-full text-center font-bold uppercase tracking-[0.5rem] bg-limena-500 hover:bg-limena-400 duration-150 transition-all py-3 px-4 rounded-lg text-white">
                         Contáctanos
                     </a>
                 </div> --}}
             </div>
             <div class="flex items-center md:pr-8 py-6 px-10">
                 <img src="{{ asset('img/comida.jpg') }}" class="rounded-full" alt="">
             </div>
         </div>
     </section>

 @endsection
