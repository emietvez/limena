<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EnviarCorreo;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(){
         request()->validate([
            'nombre'=>'required',
            'email' => 'required|email',
            'telefono' => 'required|min:10|numeric',
            'mensaje' => 'required|min:3'
         ]);
         $data = request();

        //  Mail::to('info@fincalalimena.com')->send(new EnviarCorreo($data));
         Mail::to('fincalalimena@gmail.com')->send(new EnviarCorreo($data));
        //  Mail::to('emiliano.aconcagua@gmail.com')->send(new EnviarCorreo($data));


         return redirect()->route('home')->with('success', "Formulario reserva enviado correctamente");
    }
    
}
