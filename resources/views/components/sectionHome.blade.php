<section class=" container-fluid">
    <div class="container my-2">
        <div class="row col-12">
            <div class="col-12 justify-content-center d-flex">
    <form action="{{route('advertisement.search')}}" method="GET" class="d-flex " >
        <input name="searched" class="form-controll me-2" type="search" placeholder="Cerca" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"> Cerca </button>
    </form>
   </div>
   </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6 text-center my-1">
            <h2 class="fs-1 fw-bold  gradient ">Una vasta scelta di prodotti usati</h2>
            <p class="fw-bold second ">Scegli anche tu di vendere in totale sicurezza</p>


            @if (Auth::user())
            <a href="{{ route('advertisement.create') }}"><button class="bn632-hover bn20 ">Inserisci annuncio</button></a>
            @else
            <a href="{{ route('register') }}"><button class="bn632-hover bn20 ">Registrati</button></a>

            @endif

        </div>
        <div class="col-12 col-md-5 my-1 ">
            <img src="Media\header2.svg" class="rounded shadow" alt="">
        </div>
    </div>
    

</section>
