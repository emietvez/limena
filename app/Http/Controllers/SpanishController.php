<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpanishController extends Controller
{
    //ESPAÑOL CONTROLLER
    public function index(){
        return view('home');
    }
    public function tierrasblancas(){
        return view('tierrasblancas');
    }
    public function limena(){
        return view('limena');
    }
    public function cabalgatas(){
        return view('cabalgatas');
    }
    public function aventura(){
        return view('aventura');
    }
    public function gastronomia(){
        return view('gastronomia');
    }
    public function contacto(){
        return view('contacto');
    }
    
}
