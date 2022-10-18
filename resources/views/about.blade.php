@include('partials.header')
<body>
    <div id="app">
        <navigation></navigation>
        <section class="about" id="about">
            <div class="container">
                <div class="heading text-center">
                    <h2>Tko smo
                        <span>mi?</span></h2>
                    <p><i>“Proučavao sam mnoge filozofe i mnoge životinje.
                        <br>
                        Mudrost životinja je nedvojbeno superiorna.” </i>- Hipolit
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6" style="border-radius: 10px;">
                        <img style="border-radius: 10px;" src="{{ asset('/images/happydog.jpeg') }}" alt="about" class="img-fluid" width="100%">
                    </div>
                    <div class="col-lg-6">
                        <h3>Vaš online veterinar! </h3>
                        <p>
                            NetVet je mjesto za sve vlasnike kućnih ljubimaca i one koji to žele postati.
                            Dobrodošli su i svi koji ne spadaju o ovu kategoriju, ali žele znati više.
                        </p>
                        <p>
                            Stranica je proizašla iz potrebe da se široj javnosti prezentiraju točne i njima razumljive informacije
                            vezane uz bolesti i liječenje kućnih ljubimaca te njihovo držanje.
                        </p>
                        <p>
                            Iza NetVet-a stoji mali tim doktora veterinarske medicine koji Vam stoje na usluzi.
                        </p>
                        <div class="cta">
                            <a href="#">Pročitaj naše savjete</a>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <h4>
                                    <i class="far fa-solid fa-paw"></i>Zdravlje</h4>
                            </div>
                            <div class="col-md-3">
                                <h4>
                                    <i class="far fa-solid fa-paw"></i>Prehrana</h4>

                            </div>
                            <div class="col-md-4">
                                <h4>
                                    <i class="far fa-solid fa-paw"></i>Igra</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@include('partials.footer')
