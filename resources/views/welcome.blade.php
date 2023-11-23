<x-layout>

    {{-- <x-HeaderHome/> --}}


    <x-sectionHome />
    <x-sectionHome3 />
    <section class="my-5 w-100 min-vh-100 ">
        <h3 class="fs-2 fw-bold  gradient">Ultime inserzioni aggiunte</h3>


        <div class="col-10 col-md-4">
            <div class="d-flex ">
                @foreach ($annunci as $annunci)
                    <x-cardsHome :advertisement="$annunci" />
                @endforeach
            </div>

        </div>






    </section>




















</x-layout>
