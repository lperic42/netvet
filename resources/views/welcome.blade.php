@include('partials.header')
<body>
    <div id="app">
        <div>
            <navigation
                home_url="{{ route('homepage') }}"
                about_url="{{ route('about') }}"
                blog_url="{{ route('blogs') }}"
                contact_url="{{ route('contact') }}"
            ></navigation>
        </div>

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
                                            <a href="{{ route('blogs') }}">Pročitaj naše savjete</a>
                                        </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <services></services>


        <div id="latest-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-section">
                            <h2>Zadnji blogovi</h2>
                            <img src="images/sectionbreak2.png" alt="" >
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach($featuredBlogs as $blog)
                        <post image="{{ $blog->featured_image }}" excerpt="{{ $blog->excerpt }}" url="{{ route('blogs.show', ['slug' => $blog->slug]) }}" title="{{ $blog->title }}" created_at="{{ $blog->created_at->format('d.m.Y') }}"></post>
                    @endforeach
                </div>
            </div>
        </div>

@include('partials.footer')
