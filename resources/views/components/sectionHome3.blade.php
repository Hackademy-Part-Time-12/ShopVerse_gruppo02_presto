<section class="container-fluid my-5 py-5 ">

    <div class="row my-3 align-self-center translate">
        {{-- immagine di sinistra --}}
        <div class="col-12 col-md-4">
            <img class="img-thumbnail shadow " src="Media\header3.svg" alt="">

        </div>
        {{-- scritta centrale --}}
        <div class="col-12 col-md-4 my-2 text-center align-self-center">
            <h2 class="fs-1 fw-bold  gradient">Vasta scelta di articoli molte sezioni</h2>

        </div>
        {{-- immagine destra --}}
        <div class="col-12 col-md-4">
            <img class="img-thumbnail shadow " src="Media\header3.svg" alt="">

        </div>
    </div>
    <div class="container-fluid my-2">
        <div class="row col-12">
            <div class="col-12 justify-content-center d-flex">
                <form action="{{ route('advertisement.search') }}" method="GET" class="">
                    <input name="searched" class="form-controll " type="search" placeholder="Cerca"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"> Cerca </button>
                </form>
            </div>
        </div>
    </div>


</section>
