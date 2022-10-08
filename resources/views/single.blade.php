@include('partials.header')
<body>
    <div id="app">
        <navigation></navigation>

        <div class="single-post">
            <div class="single-post--heading">
                <h1 style="overflow: hidden">{{ $post->title }}</h1>
                <img src="{{ $post->featured_image }}">
            </div>
            <div class="single-post--body">
                <div style="width: 80%; margin: 0 auto"> {!! $post->body !!} </div>
            </div>
        </div>

@include('partials.footer')
