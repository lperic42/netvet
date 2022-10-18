@include('partials.header')
<body>
    <div id="app">
        <navigation
            home_url="{{ route('homepage') }}"
            about_url="{{ route('about') }}"
            blog_url="{{ route('blogs') }}"
            contact_url="{{ route('contact') }}"
        ></navigation>
        <section class="searchWrap">
            <div class="search">
                <h2>Znaš što tražiš?</h2>
                <form class="searchBox" method="post" action="{{ route('blogs.search') }}">
                    @csrf
                    <div class="form-outline">
                        <input type="text" id="form1" class="form-control" name="query" placeholder="Upiši pojam..." />
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="el-icon-search"></i>
                    </button>
                </form>
            </div>
        </section>

        <section class="blogsWrap">
            <div class="blogs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h1>Svi naši savjeti</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    @if(empty($blogs))
                        @foreach($blogs as $blog)
                            <post image="{{ $blog->featured_image }}"
                                  excerpt="{{ $blog->excerpt }}"
                                  url="{{ route('blogs.show', ['slug' => $blog->slug]) }}"
                                  title="{{ $blog->title }}"
                                  created_at="{{ $blog->created_at }}"></post>
                        @endforeach
                    @else
                        <div style="height: 100%; display: flex; justify-content: center; align-items: center">
                            <p style="font-size: 25px; font-weight: 200; color: rgba(47,47,47,0.51)"><i>Nismo mogli pronaći nijedan blog</i></p>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </section>

@include('partials.footer')
