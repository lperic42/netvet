@include('partials.header')
        <section class="mb-10">
            <div class="p-5 text-center bg-image" style="background: linear-gradient(90deg, rgba(39,108,172,1) 0%, rgba(137,196,249,1) 100%, rgba(83,168,242,1) 100%);; height: 600px; background-size: cover;">
                <div class="mask" style="">
                    <div class="d-flex align-items-center h-100" style="justify-content: space-between">
                        <div class="row d-flex" style="width: 90%; margin: 0 auto;">
                            <div class="text-container mainWrapperForLogo" style="">
                                <div class="text-black logocontainer">
                                    <div style="opacity: .9; margin-bottom: 20px;" class="logoholder">
                                        <img src="images/netvet-logo-with-font.svg" alt="NetVet logo - veterinar koji je prisutan u svakom trenutku">
                                    </div>
                                    <div style="color: #fff; font-size: 30px;" class="moto">
                                        <h1 style="">Veterinar koji je dostupan <br> u svakom trenutku!</h1>
                                    </div>
                                </div>
                                <div style="" class="parts">
                                    <img src="images/parts.svg" alt="Simboli koji prikazuju životinjske navike">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <div id="services">
            <div class="">
                <div class="">
                    <div class="">
                        <div class="heading-section">
                            <h2>Samo najbolje za Vaše ljubimce</h2>
                            <img class="sectionbreak" src="images/sectionbreak3.png" alt="" >
                        </div>
                    </div>
                </div>
                <services link="{{ route('blogs') }}" ></services>
            </div>
        </div>

        <div id="latest-blog">
            <div class="">
                <div class="">
                    <div style="">
                        <div class="heading-section">
                            <h2>Zadnji blogovi</h2>
                            <img src="images/sectionbreak2.png" alt="Slika koja dijeli dvije sekcije stranice" >
                        </div>
                    </div>
                </div>
                <div style="width: 80%; margin: 0 auto;" class="row">
                    @foreach($featuredBlogs as $blog)
                        <post image="{{ $blog->featured_image }}" excerpt="{{ $blog->excerpt }}" url="{{ route('blogs.show', ['slug' => $blog->slug]) }}" title="{{ $blog->title }}" created_at="{{ $blog->created_at->format('d.m.Y') }}"></post>
                    @endforeach
                </div>
            </div>
        </div>

@include('partials.footer')
