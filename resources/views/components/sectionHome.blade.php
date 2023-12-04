<section class=" container-fluid my-5 py-2">

    <div class="row justify-content-center my-5 py-1 align-items-center">
        <div class="col-12 col-md-6 text-center my-1">
            <h2 class="fs-1 fw-bold  gradient ">{{ __('ui.frase1') }}</h2>
            <p class="fw-bold second ">{{ __('ui.frase2') }}</p>


            @if (Auth::user())
                <a href="{{ route('advertisement.create') }}"><button class="bn632-hover bn20 ">Inserisci
                        annuncio</button></a>
            @else
                <a href="{{ route('register') }}"><button class="bn632-hover bn20 ">{{ __('ui.btn') }}</button></a>
            @endif

        </div>
        <div class="col-12 col-md-5 my-1 ">
            <img src="Media\header2.svg" class="rounded shadow" alt="">
        </div>
    </div>


</section>


