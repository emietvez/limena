 {{-- SLIDE --}}
 <div class="back-contacto bg-black flex items-center justify-center absolute">
     <div class="relative top-16 px-12 pt-8 pb-8 rounded-xl backdrop-blur-sm bg-white/50 z-10">
         <h1 class="text-center text-2xl mb-2 font-bold">HACÉ TU RESERVA </h1>
         <div class="mb-2 flex  items-center justify-center">
             <small class="text-center">Envianos el formulario con tu consulta <br> y te responderemos a la
                 brevedad.</small>
         </div>
         <form action="{{ route('sendForm') }}" method="POST" class="grid">
             @csrf
             <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}"
                 class="
                focus:outline-none focus:border-cyan-500 focus:ring-2 focus:ring-blue-200
                disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none">
             {!! $errors->first('nombre', '<small class="text-red-800 pt-1">:message</small>') !!} <br>

             <input type="email" name="email" id="Email" value="{{ old('email') }}" placeholder="Email" class="focus:outline-none focus:border-cyan-500 focus:ring-2 focus:ring-blue-200
             disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none">
             {!! $errors->first('email', '<small class="text-red-800 pt-1">:message</small>') !!} <br>

             <input type="text" name="telefono" placeholder="Telefono" value="{{ old('telefono') }}" class="focus:outline-none focus:border-cyan-500 focus:ring-2 focus:ring-blue-200
             disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none">
             {!! $errors->first('telefono', '<small class="text-red-800 pt-1">:message</small>') !!} <br>

             <textarea id="" name="mensaje" placeholder="Mensaje" cols="30" rows="2" class="focus:outline-none focus:border-cyan-500 focus:ring-2 focus:ring-blue-200
             disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none">{{ old('mensaje') }}</textarea>
             {!! $errors->first('mensaje', '<small class="text-red-800 pt-1">:message</small>') !!} <br>

             <button
                 class="bg-limena-500 hover:bg-limena-400 text-limena-100 font-semibold hover:text-white duration-150 transition-all py-2 px-4 rounded">Enviar</button>
         </form>
     </div>
 </div>
 @extends('layouts.app')

 @section('title', 'Contacto')

 @section('content')

 @endsection
