@include('partials.header')

        <main class="single-post">
            <div class="single-post--heading">
                <h1 style="overflow: hidden">{{ $post->title }}</h1>
                <img src="{{ $post->featured_image }}">
            </div>
            <div class="single-post--body">
                <div style="width: 80%; margin: 0 auto; color: #000;"> {!! $post->body !!} </div>
            </div>
        </main>

        <div class="related-posts" style="width: 80%; margin: 0 auto 40px auto;">
            <div style="height: 1px; width: 100%; background-color: rgb(57, 159, 252); margin-bottom: 30px;"></div>
            <div style="width: 100%; margin-bottom: 30px;">
                <h3 style="text-align: center">Možda bi te moglo zanimati</h3>
            </div>
            <div class="row">
                @foreach($relatedPosts as $relatedPost)
                    <post image="{{ $relatedPost->featured_image }}"
                          excerpt="{{ $relatedPost->excerpt }}"
                          url="{{ route('blogs.show', ['slug' => $relatedPost->slug]) }}"
                          title="{{ $relatedPost->title }}"
                          created_at="{{ $relatedPost->created_at->format('d.m.Y') }}"></post>
                @endforeach
            </div>

        </div>

@include('partials.footer')
