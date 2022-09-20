@include('partials.header')
<body>
    <div id="app">
        <navigation></navigation>

{{--        <section class="section-hero">--}}
{{--            <div class="hero">--}}
{{--                <div class="heading">--}}
{{--                    <h1><span>NetVet</span>.com</h1>--}}
{{--                    <p>Veterinar koji je dostupan u svakom trenutku.</p>--}}
{{--                </div>--}}
{{--                <div class="cta">--}}
{{--                    <a href="#">Pročitaj naše savjete</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

        <section class="mb-10">
            <div class="p-5 text-center bg-image" style="background-image: linear-gradient(to right,#b7b7b7 ,transparent 100%), url('../images/Untitled design.png'); height: 600px; background-size: cover; background-position: 50% 50%; background-color: rgba(0, 0, 0, 0);">
                <div class="mask" style="background-color: rgba(126,126,126,0.35)">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="row d-flex justify-content-center">
                            <div class="text-container">
                                <div class="text-black">
                                    <h2 class="mb-4 px-4 px-md-5 display-3 ls-tight">
                                        <span>Veterinar koji je dostupan</span>
                                        <br>
                                        <span>u svakom trenutku!</span>

                                    </h2>
                                        <div class="cta">
                                            <a href="#">Pročitaj naše savjete</a>
                                        </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="svg-container">
                    <svg width="2000" height="128" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="2000" y="128" viewBox="0 0 2000 128" enable-background="new 0 0 2000 128" xml:space="preserve">
                <path opacity="0.2" fill="#e7e7e7" d="M1999.5,22.2c-346-0.6-524.6-4.7-878.8,4.4c-286.6,7.4-442.3,54-608.1,51.2
    C307.3,74.3,202.5,5-0.5,28.1v100.4l2000-0.5V22.2z"></path>
                        <path opacity="0.2" fill="#e7e7e7" d="M-0.3,46.1C251,15.3,440.9,84.7,499.6,98.4c54.7,12.8,122.5,12,186.7-5.3
    c154.2-41.6,315.5-70.9,475.2-67.5s324.6,22.4,484.3,19.7c133-2.3,302.8,1.7,352.8,3.7c0,21.3,0,80,0,80H-0.5L-0.3,46.1z"></path>
                        <path opacity="0.4" fill="#e7e7e7" d="M2000,41.2c-139.8-12.7-219.9-10.8-360.2-11.2c-285.5-0.8-487.5,18-736.2,51.1
    C647,115.4,546.7,116.4,199.2,53.6C140.3,43,59.5,45.6-0.5,52.3V130h2000L2000,41.2z"></path>
                        <path fill="#F7FAFC" d="M1634.6,50.1c-193.8,11.9-366.9,24.9-569,50c-110.2,13.7-221.2,21.5-332.3,19.6
  c-187-3.3-344.5-29.7-560.9-69.8c-122.2-22.6-172.8-4-172.8-4V130h1998V46C1997.5,46,1831,38.1,1634.6,50.1z"></path>
            </svg>
                </div>
            </div>
        </section>
        <section class="section-about">
            <div class="about">
                <div class="about--text">
                    <h2>Zdravlje naših krznenih prijatelja je uvijek  <br> na prvom mjestu</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut fugiat necessitatibus nemo odio qui, quis saepe.
                        Accusantium adipisci animi aperiam asperiores aut cumque debitis delectus dolores, ea error est eveniet excepturi expedita explicabo
                        facere harum illo illum itaque iusto laboriosam laborum maiores natus nemo nisi non officiis quae quisquam ratione reiciendis, sed sequi,
                        sint soluta suscipit tempore temporibus vero voluptatem. Adipisci aperiam, eius excepturi itaque qui quia quibusdam. A, nobis, repellat!
                        At delectus dignissimos eaque hic neque rem tempore voluptates? Ab alias animi commodi,
                        consequatur cum cupiditate, in magni molestiae nam officia porro quidem quo rerum similique ut voluptate?</p>
                </div>
            </div>
        </section>

        <section class="section-blogs">
            <div class="blogs">
                <div class="title">
                    <h2>Zadnji blogovi</h2>
                </div>
                <div class="cards">
                    <div class="single">
                        <div class="image">
                            <img src="https://static01.nyt.com/images/2022/05/10/science/28DOGS-BEHAVIOR1/28DOGS-BEHAVIOR1-superJumbo.jpg?quality=75&auto=webp" alt="">
                        </div>
                        <div class="text">
                            <h3>Naslov</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, quas.</p>
                            <a href="#">Pročitaj</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>
@include('partials.footer')
