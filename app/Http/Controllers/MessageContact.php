<?php

namespace App\Http\Controllers;

use App\Mail\EnvioContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageContact extends Controller
{
    
    public function store(){
        request()->validate([
           'nombre'=>'required',
           'email' => 'required|email',
        ]);
        $data = request();

        Mail::to('info@fincalalimena.com')->send(new EnvioContacto($data));
        // Mail::to('fincalalimena@gmail.com')->send(new EnvioContacto($data));
       //  Mail::to('emiliano.aconcagua@gmail.com')->send(new EnviarCorreo($data));

        return redirect()->route('home')->with('successContact', "Formulario contacto enviado correctamente");
   }
}
