@include('partials.header')
<body>
    <div id="app">
        <navigation
            home_url="{{ route('homepage') }}"
            about_url="{{ route('about') }}"
            blog_url="{{ route('blogs') }}"
            contact_url="{{ route('contact') }}"
        ></navigation>

        <div class="jumbotron text-center" style="height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <h1 class="display-3">Hvala na upitu!</h1>
            <p class="lead"><strong>Naši veterinari će vam odgovoriti u najkraćem roku!</strong></p>
            <hr>
            <a href="{{ route('homepage') }}" class="lead" style="color: #fff; text-decoration: none; font-weight: 400; font-size: 20px; padding: 10px 15px; background-color: rgb(57, 159, 252); border-radius: 10px;">
                Natrag na početnu
            </a>
        </div>

@include('partials.footer')
