@extends('layouts.app')

@section('content')
    <main class="container">
        <div class="flex items-center justify-center flex-col py-10">
            <img src="./assets/img/brands/flor.png" class="items-center mx-5 h-20" alt="">
            <h1 class="text-center w-1/2 text-xl   font-bold text-#52525A ">
                UN ESECENARIO UNICO AL PIE DE LA CORDILLERA DE LOS ANDES
            </h1>
        </div>
        <div class="flex py-20">
            <img src="./assets/img/21.jpeg" class="sm h-50 w-65" alt="" />
            <div class=" flex flex-col items-center content-center text-center absolute right-10  bg-white">
                <h1>TIERRAS BLANCAS</h1>
                <p class="w-2/5 " te>
                    20.000 hectáreas de increíbles paisajes que abarcan desde un campo
                    agreste y llano, hasta una imponente porción de la cordillera de los
                    Andes, al límite con Chile.
                </p>
                <button>VER MAS</button>
            </div>
        </div>
        <div class="flex py-20">
            <img src="./assets/img/1.jpeg" alt="" />
            <div class=" flex flex-col items-center content-center text-center absolute bg-white">
                <h2>FINCA LA LIMEÑA</h2>
                <p class="w-2/5 ">
                    Este es el lugar de recepción donde los visitantes se preparan para
                    comenzar con la aventura. Un chalet antiguo es la antesala a una
                    verdadera travesía campestre única e inigualable.
                </p>
                <button>VER MAS</button>
            </div>
        </div>
        <div class="flex py-20">
            <img src="./assets/img/3.jpeg" alt="" />
            <div class=" flex flex-col items-center content-center text-center absolute bg-white">
                <h3>CABALGATAS LA LIMEÑA</h3>
                <p class="w-2/5 ">
                    Disfrutá inolvidables cabalgatas inmersos en espectaculares paisajes
                    al pie de la cordillera de los Andes. Para vivir la experiencia no es
                    necesario tener experiencia, nuestros guias expertos seleccionaran el
                    caballo ideal para tu nivel.
                </p>
                <button>VER MAS</button>
            </div>
        </div>
        <div class="flex py-20 ">
            <img src="./assets/img/bici.png" alt="" />
            <div class=" flex flex-col items-center content-center text-center absolute bg-white">
                <h4>MOMENTOS DE AVENTURA</h4>
                <p class="w-2/5 ">
                    Si sos amante del trekking o mountain bike, podrás disfrutar de una
                    travesía andina a los pies de los Andes. Circuitos con dificultad
                    técnica baja te invitan a explorar el paisaje.
                </p>
                <button>VER MAS</button>
            </div>

        </div>
    </main>
@endsection
