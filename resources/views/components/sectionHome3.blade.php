<section class="container-fluid my-5 py-5 ">

    <div class="row my-3 align-self-center translate">
        {{-- immagine di sinistra --}}
        <div class="col-12 col-md-4">
            <img class="img-thumbnail shadow " src="Media\header3.svg" alt="">

        </div>
        {{-- scritta centrale --}}
        {{-- <div class="col-12 col-md-4 my-2 text-center align-self-center">
            <h2 class="fs-1 fw-bold  gradient">{{__('ui.home3')}}</h2>
        </div> --}}
        <div class="col-12 col-md-4 text-center align-self-center">
            <div class="text gradient" id="te"></div>
        </div>





        {{-- immagine destra --}}
        <div class="col-12 col-md-4">
            <img class="img-thumbnail shadow " src="Media\header4.svg" alt="">

        </div>
    </div>




</section>
<div class="row text-center my-4">
    <div class="search row justify-content-center">
        <form action="{{ route('advertisement.search') }}" method="GET" class="justify-content-center">
            <input type="search" class="searchTerm" name="searched" placeholder="{{ __('ui.ricerca') }}">
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
        </form>

    </div>
</div>
