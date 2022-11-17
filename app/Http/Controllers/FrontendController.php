<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    //ESPAÑOL CONTROLLER
    public function index(){
        return view('home');
    }
    public function es(){
        return view('cabalgatas');
    }

    //INGLES CONTROLLER
    public function en(){
        return view('en.home');
    }
    public function enRide(){
        return view('en.ride');
    }


    // PORTUGUES CONTROLLER
    public function pt(){
        return view('pt.comeco');
    }
    public function passeios(){
        return view('pt.passeios');
    }
}
