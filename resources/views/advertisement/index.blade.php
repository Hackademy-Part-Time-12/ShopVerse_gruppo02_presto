<x-layout>
    <header class="container-fluid p-5">
        @if ($advertisement->isnotEmpty())
        <div class="row">
            <div class="col-12 p-5">
                <h1 class="display-2 text-center">Ecco i nostri annunci</h1>
            </div>
            <section class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            @foreach ($advertisement as $annunci)
                                <div class="col-12 col-md-4 my-4">
                                    <div class="card shadow" style="width: 18rem;">
                                        <img src="" alt="" class="card-img-top p-3 rounded">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $annunci->title }}</h5>
                                            <p class="card-text">{{ $annunci->body }}</p>
                                            <p class="card-text">{{ $annunci->price }}</p>
                                            <div class="row">
                                                <a href="{{route('advertisement.show',$annunci)}}" class="btn-link">
                                                    Visualizza</a>
                                                <a href="{{route('categoryShow', ['category'=>$annunci->category])}}">Categoria:
                                                    {{ $annunci->category->name }}</a>

                                                <p class="card-footer">Pubblicata il: {{ $annunci->created_at->format('d/m/y') }} -
                                                    Autore {{ $annunci->user->name ?? 'Sconosciuto' }}</p>

                                            </div>


                                        </div>

                                    </div>
                                </div>
                            @endforeach

                            {{$advertisement->links()}}

                        </div>

                    </div>
                </div>
            </section>
        </div>
        @else
        <div class="col-12 my-4">
            <p class="fs-1 p-3">Non sono presenti annunci </p>
            <p class="fs-2 text-center">Pubblicane uno: <a href="{{ route('advertisement.create') }}" class="btn-link text-decoration-none">Nuovo Annuncio </a> </p>
        </div>


        @endif

    </header>





</x-layout>
