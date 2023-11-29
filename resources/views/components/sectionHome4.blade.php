<x-sectionHome4>

    <section class="my-5 w-100 min-vh-100 ms-2 ">
        <h3 class="fs-2 fw-bold ms-4  gradient">Ultime inserzioni aggiunte</h3>

        @if ($annunci->isnotEmpty())
            <div class="col-12 my-3">
                <div class="row ms-2 justify-content-center ">
                    @foreach ($annunci as $annunci)
                        <x-cardsHome :advertisement="$annunci" />
                    @endforeach
                </div>

            </div>
        @else
        <div class="col-12 my-4">
            <p class="fs-1 ms-3">Non sono presenti annunci </p>
            <p class="fs-2 text-center ">Pubblicane uno: <a href="{{ route('advertisement.create') }}" class="btn-link text-decoration-none">Nuovo Annuncio </a> </p>
        </div>

        @endif
    </section>

</x-sectionHome4>