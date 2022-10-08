@include('partials.header')
<body>
    <div id="app">
        <navigation></navigation>

        <section class="searchWrap">
            <div class="search">
                <h2>Znaš što tražiš?</h2>
                <div class="searchBox">
                    <div class="form-outline">
                        <input type="search" id="form1" class="form-control" placeholder="Upiši pojam..." />
                    </div>
                    <button type="button" class="btn btn-primary">
                        <i class="el-icon-search"></i>
                    </button>
                </div>
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
                    @foreach($blogs as $blog)
                        <post image="{{ $blog->featured_image }}" excerpt="{{ $blog->excerpt }}" url="{{ route('blogs.show', ['slug' => $blog->slug]) }}" title="{{ $blog->title }}" created_at="{{ $blog->created_at }}"></post>
                    @endforeach
                    </div>
                </div>
            </div>
        </section>

@include('partials.footer')
