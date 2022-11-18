 {{-- SLIDE --}}
 <div class="back-cabalgatas bg-black flex items-center justify-center">
     <h1 class="text-white text-center text-2xl md:text-5xl font-bold uppercase">Cabalgatas la limeña</h1>
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
             <h1 class="md:text-justify  text-3xl md:text-4xl font-normal mt-4 text-limena-200">
                 IMAGINA CAMBIAR DE ESCENARIO <br>
                 EN TAN SOLO UN PAR DE HORAS
             </h1>
         </div>
         <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:pt-8 pb-14 md:px-36 text-limena-200">

             <div class="">
                 <p class="font-family-200 text-xl ">
                     A las 8 am como horario sugerido, te recogeremos
                     en tu hotel, aeropuerto, terminal de omnibus o en
                     el punto donde elijas que inicie la aventura. <br>
                     Dejaremos la ciudad atrás, para internarnos por
                     alrededor de 2 horas en la Ruta Nacional 40 hacia
                     nuestro destino: <br> San Carlos, el departamento
                     sureño por excelencia del Valle de Uco, el mismo
                     que impregna la región de paisajes naturales.
                 </p>
             </div>
             <div class="">
                 <p class="font-family-200 text-xl">
                     Siempre con los Andes ante tus ojos,
                     atravesaremos tranqueras que abrirán las puertas
                     a un mundo diferente. <br>
                     Una vez en la finca, un sabroso desayuno
                     campestre nos brindará la energía necesaria para
                     emprender la travesía. <br>
                     <b>Todos los servicios incluyen traslado al punto de
                         partida al finalizar las actividades.
                     </b>
                 </p>
             </div>

         </div>
     </section>

     <div class="back-cabalgatas2 bg-black flex items-center justify-center">
         <h1 class="text-white text-center text-2xl md:text-5xl font-bold uppercase">Cabalgatas la limeña</h1>
     </div>

     <section class="bg-limena-600 text-limena-200">
         <div class="md:container flex items-center justify-center py-20">
             <p class="w-2/3 text-xl md:text-justify font-family-200">En La Limeña, podrás disfrutar de diferentes senderos y
                 actividades.
                 Comenzaremos por conocer a los gauchos que acompañarán el recorrido.
                 Ellos serán los responsables de entregar el caballo indicado para cada
                 jinete. Ya sea que cuentes o no, con experiencia cabalgando; elegirán el
                 animal ideal para que tu paseo sea placentero y te lleves mucho más que un
                 recuerdo. Nuestros guias expertos han diseñado especialmente dos tipos
                 de cabalgatas para optimizar tu experiencia.</p>
         </div>
         <div class="flex items-center container md:w-2/3 py-10">
             <div class="grid grid-cols-1 md:grid-cols-5 bg-white rounded-xl gap-6">
                 <div class="col-span-3 md:text-justify p-10  ">
                     <h2 class="text-3xl pb-4">CABALGATA AL CORAZÓN DE LOS ANDES</h2>
                     <p class=" font-family-200 pb-3 text-sm">Esta excursión te llevará a lo más profundo de la majestuosa
                         cadena
                         montañosa de los Andes. </p>
                     <p class=" font-family-200 pb-3 text-sm">- Duración: 1/2 noches (podemos organizarlo según tu
                         preferencia) </p>
                     <p class=" font-family-200 pb-3 text-sm"> - Pernocte en dos refugios de alta montaña: Roque y El
                         Toscal. </p>
                     <p class=" font-family-200 pb-3 text-sm"> Donde disfrutarás de únicos y vírgenes paisajes que nuestra
                         cordillera ofrece y noches donde las estrellas se dejan ver de
                         forma inolvidable </p>
                     <p class=" font-family-200 pb-3 text-sm">Durante esta cabalgata no solo te deleitarás con lo más
                         imponente del paisaje, sino que podrás estar en contacto directo
                         con la flora y la fauna del lugar. </p>
                     <p class=" font-family-200 pb-3 text-sm"> - Esta opción cuenta con todos los servicios necesarios para
                         que el
                         recorrido sea cómodo y seguro.</p>
                     <p class=" font-family-200 text-sm"> - Incluye zona de descanso y banquete completo con los mejores
                         varietales de vino durante todas las jornadas.</p>
                     <div class="flex items-center justify-center pt-4">
                         <a href=""
                             class="w-full text-center font-bold uppercase tracking-[0.5rem] bg-limena-500 hover:bg-limena-400 duration-150 transition-all py-3 px-4 rounded-lg text-white">
                             Reservar aquí
                         </a>
                     </div>
                     <div class="flex items-center justify-center pt-4">
                         <a href=""
                             class="w-full text-center font-bold uppercase tracking-[0.5rem] bg-cyan-700 hover:bg-limena-400 duration-150 transition-all py-3 px-4 rounded-lg text-white">
                             Reservar por tripadvisor
                         </a>
                     </div>
                 </div>
                 <div class="card-back col-span-2 rounded-r-xl">

                 </div>
             </div>
         </div>
         <div class="flex items-center container md:w-2/3 py-10 ">
             <div class="grid grid-cols-1 md:grid-cols-5 bg-white rounded-xl gap-6 ">
                 <div class="col-span-3 md:text-justify p-10 ">
                     <h2 class="text-3xl pb-4">CABALGATA AL CORAZÓN DE LOS ANDES</h2>
                     <p class=" font-family-200 pb-3 text-sm">Una excursión a caballo por senderos únicos dentro de la
                         Estancia y
                         a los pies de los Andes. Un recorrido que podrás disfrutar a través
                         de aroyos y tierras vírgenes.. </p>
                     <p class=" font-family-200 pb-3 text-sm">- Servicio full day: Esta cabalgata ofrece distintas opciones
                         para
                         recorrer de acuerdo a la cantidad de horas que quieras cabalgar.
                         Siempre nos adaptamos a tus necesidades.</p>
                     <p class=" font-family-200 pb-3 text-sm">- Podrás, también, vivenciar la experiencia de campo y avistar
                         cóndores, águilas, guanacos, y demás animales autóctonos. </p>
                     <p class=" font-family-200 pb-3 text-sm"> - Senderos de paisajes vírgenes te esperan para ser
                         descubiertos y
                         cambiar para siempre tu experiencia de viaje.</p>
                     <p class=" font-family-200 pb-3 text-sm">- Almuerzo criollo: A mitad de camino, y mientras los animales
                         descansan y se hidratan, te deleitarás con la comida típica del
                         lugar, acompañado de vinos varietales de primer nivel.</p>
                     <p class=" font-family-200 pb-3 text-sm"> Cierre de la cabalgata: Despediremos esta gran jornada con
                         una
                         deliciosa media tarde campestre y criolla..</p>

                     <div class="flex items-center justify-center pt-4">
                         <a href=""
                             class="w-full text-center font-bold uppercase tracking-[0.5rem] bg-limena-500 hover:bg-limena-400 duration-150 transition-all py-3 px-4 rounded-lg text-white">
                             Reservar aquí
                         </a>
                     </div>
                     <div class="flex items-center justify-center pt-4">
                         <a href=""
                             class="w-full text-center font-bold uppercase tracking-[0.5rem] bg-cyan-700 hover:bg-limena-400 duration-150 transition-all py-3 px-4 rounded-lg text-white">
                             Reservar por tripadvisor
                         </a>
                     </div>
                 </div>
                 <div class="card-back-two col-span-2 rounded-r-xl">

                 </div>
             </div>
         </div>
         <div class="grid place-content-center container md:w-2/3 py-10 ">
             <div class="grid grid-cols-1 bg-white rounded-xl gap-6 ">
                 <h2 class="text-2xl md:text-3xl px-10 md:px-20 pt-10 md:pt-6 pb-2 text-center ">RECOMENDACIONES PARA QUE DISFRUTES
                    AÚN MÁS DE TU EXPERIENCIA</h2>
                 <div class="grid grid-cols-1 md:grid-cols-2 rounded-xl md:gap-6 ">
                     <div class="md:text-justify px-10 pb-6 font-family-200 font-medium text-lg">
                         <ul>
                             <li>• Pantalón largo y comodo</li>
                             <li>• Lentes (opcional)</li>
                             <li>• Pañuelo (opcional)</li>
                             <li>• Calcetines largos o medias gruesas
                                 (evita rozaduras)</li>
                             <li>• Calzado cómodo</li>
                             <li>• Botas o botines</li>
                             <li>• Bloqueador solar</li>
                         </ul>

                     </div>
                     <div class="text-justify px-10 pb-10 md:pb-6 font-family-200 font-medium text-lg">
                        <ul>
                            <li>• Sombrero</li>
                            <li>• Ganas de disfrutar de un día inolvidable</li>
                            <li class="py-4 font-semibold">Actividad no recomendable para:</li>
                            <li>•  Personas con problemas de salud 
                                (espalda, cardíacos o cualquier tipo de 
                                afección médica grave).</li>
                            <li>• Mujeres embarazadas</li>
                            
                        </ul>
                     </div>
                 </div>
             </div>
         </div>
     </section>

 @endsection
