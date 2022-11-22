<style>
.container-3 {
  background: #52525a;
  width: 100%;
  height: 1000px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.content-3 h2 {
  color: white;
  font-size: 2.6rem;
  font-weight: bold;
  text-align: center;
  margin: 20px 0;
}
.content-3 p {
  color: white;
  font-size: 1.8rem;
  text-align: center;
  width: 620px;
  padding-bottom: 25px;
}

.cards {
  height: 650px;
  display: flex;
  justify-content: center;
  flex-direction: row;
}
.cards .card .card-img {
  width: 415px;
  height: 310px;
}
.cards .card .card-img img {
  border-radius: 8px;
  height: 310px;
}

.cards .card {
  width: 380px;
  height: 650px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  margin: 0 35px;
}
.card-content h3 {
  font-size: 1.3rem;
  font-weight: bolder;
  padding: 0 40px;
  text-align: center;
  color: #52525a;
}
.card-content p {
  font-size: 1.1rem;
  font-weight: 400;
  text-align: center;
  color: #52525a;
  padding: 20px 35px;
}
.card-content {
  width: 410px;
  height: 310px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background: white;
  border-radius: 10px;
}
.card-content a {

  text-align: center;
  background: #bad1d0;
  width: 350px;
  height: 32px;
  border-radius: 8px;
  color: white;
  font-size: 0.8rem;
  letter-spacing: 5px;
  padding: 15px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.icono-fo {
  height: 7rem;
}
.container-lim2 {
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.container-lim2 .img-2 {
  height: 600px;
}
@media screen and (max-width: 1024px) {
  .container-2 .img-2 img {
    width: 750px;
    height: 515px;
  }

  .content-2 {
    margin: 0 50px;
  }

  .card {
    overflow: hidden;
    border-radius: 10px;
  }
  .card-img {
    width: 80%;
  }
  .cards .card .card-img {
    width: 380px;
  }
  .cards .card .card-img img {
    width: 100%;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }
  .card-content {
    width: 100%;
  }
}
@media screen and (max-width: 950px) {
  .content-1 h2 {
    width: 468px;
    font-size: 1.6rem;
  }
  .content-1 p {
    width: 467px;
    font-size: 1.2rem;
  }
  .container-2 .img-2 img {
    width: 468px;
    height: 375px;
  }
  .content-2 p {
    font-size: 1.2rem;
  }

  .content-2 {
    margin: 0 135px;
  }

  .cards {
    width: 100vw;
  }

  .cards .card .card-img {
    width: 322px;
    height: 300px;
  }
  .content-3 h2 {
    font-size: 2rem;
  }
  .content-3 p {
    font-size: 1.2rem;
  }
}
@media screen and (max-width: 780px) {
  .card-content h3 {
    font-size: 1rem;
    padding: 0px 10px;
  }
  .card-content p {
    font-size: 0.8rem;
    padding: 20px 30px;
  }

  .cards .card .card-img img {
    height: 100%;
    width: 275px;
  }
  .cards .card .card-img {
    width: 275px;
    height: 220px;
  }
  .card-content {
    height: 220px;
    width: 275px;
  }
  .cards{
    display: flex;
    align-items: center;
  }
  .cards .card {
    width: 304px;
    height: 520px;
    margin: 0 6px;
  }
  .card-content a {
    width: 230px;
    font-size: 0.8rem;
  }
  .content-3 {
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  .content-3 p {
    width: 330px;
  }
}
@media screen and (max-width: 630px) {
  main {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .container-1 {
    width: 100vw;
    margin: 0;
  }
  .container-1 .img-1 {
    width: 100vw;
  }
  .container-1 .img-1 img {
    width: 95px;
  }
  .container-2 .img-2 img {
    width: 320px;
    height: 230px;
  }
  .content-1 {
    width: 100vw;
    margin: 0;
  }
  .content-1 p {
    width: 320px;
    font-size: 0.8rem;
    padding: 0 10px;
  }
  .content-1 h2 {
    width: 320px;
    font-size: 1rem;
    line-height: 25px;
    padding: 0 8px;
  }
  .content-2 {
    margin: 0px;
  }
  .content-2 p {
    width: 100vw;
    padding: 0 45px;
    font-size: 1rem;
  }

  .content-3 h2 {
    font-size: 1.7rem;
  }
  .content-3 {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
  }
  .content-3 p {
    font-size: 1rem;
    width: 320px;
    padding-bottom: 15px;
  }
  .cards {
    width: 100%;
    height: 800px;
    flex-direction: column;
    display: flex;
  }
  .cards .card {
    margin: 15px 13px;
  }

  .card-content p {

    padding: 10px 30px;
  }
  .content-3 h2 {
    font-size: 1.4rem;
  }
}

</style>

<section class="container-3">
    <div class="content-3">
        <h2>CABALGATAS LA LIMEÑA</h2>
        <p>
            Disfrutá inolvidables cabalgatas inmersos en espectaculares paisajes
            al pie y a través de la cordillera de los Andes.
        </p>
    </div>
    <div class="cards">
        <div class="card">
            <div class="card-img">
                <img src="{{ asset('img/14.jpeg') }}" alt="" />
            </div>
            <div class="card-content">
                <h3>CABALGATA AL PIE DE LOS ANDES - FULL DAY</h3>
                <p>
                    Una excursión a caballo por senderos únicos dentro de la
                    Estancia y a los pies de los Andes.
                </p>
                <a href="/cabalgatas">VER MÁS</a>
            </div>
        </div>
        <div class="card">
            <div class="card-img">
                <img src="{{ asset('img/14.jpeg') }}" alt="" />
            </div>
            <div class="card-content">
                <h3>CABALGATA AL CORAZÓN DE LOS ANDES</h3>
                <p>
                  Llegarás a lo más profundo de la majestuosa cadena montañosa de
                  los Andes en una experiencia única.
                </p>
                <a href="/cabalgatas">VER MÁS</a>
            </div>
        </div>
        {{-- <div class="card">
            <div class="card-img">
                <img src="./assets/img/18.jpeg" alt="" />
            </div>
            <div class="card-content">
                <h3>CABALGATA AL CORAZÓN DE LOS ANDES</h3>
                <p>
                    Llegarás a lo más profundo de la majestuosa cadena montañosa de
                    los Andes en una experiencia única.
                </p>
                <div class="flex items-center justify-center pt-4">
                    <a href=""
                        class="w-full text-center font-bold uppercase tracking-[0.5rem] bg-limena-500 hover:bg-limena-400 duration-150 transition-all py-3 px-4 rounded-lg text-white">
                        Reservar aquí
                    </a>
                </div>
            </div>
        </div> --}}
    </div>
</section>
