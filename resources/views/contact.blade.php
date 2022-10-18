@include('partials.header')
<body>
    <div id="app">
        <navigation
            home_url="{{ route('homepage') }}"
            about_url="{{ route('about') }}"
            blog_url="{{ route('blogs') }}"
            contact_url="{{ route('contact') }}"
        ></navigation>
        <div style="height: 90vh">
            <contact></contact>
        </div>

@include('partials.footer')
