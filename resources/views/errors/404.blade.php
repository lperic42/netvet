@include('partials.header')

    <div class="mainbox">
        <div>
            <div style="display: flex; justify-content: center; align-items: center; width: 100%;">
                <div class="err">4</div>
                <i class="far fa-question-circle"></i>
                <div class="err2">4</div>
            </div>
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <p class="lead" style="font-weight: 500; color: rgb(57, 159, 252);">Stranica koju tražiš ne postoji!</p>
                <a href="{{ route('homepage') }}" class="lead" style="color: #fff; text-decoration: none; font-weight: 400; padding: 10px 15px; background-color: rgb(57, 159, 252); border-radius: 10px;">
                    Natrag na početnu
                </a>
            </div>
        </div>
    </div>
@include('partials.footer')
