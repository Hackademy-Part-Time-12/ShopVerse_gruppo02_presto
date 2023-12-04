<x-layout>
    <div class="container-fluid p-2 my-4">
        <div class="row">
            <div class="col-12 h">
                <h1 class="display-2 text-center">{{ $category->name }}</h1>
            </div>
        </div>
    </div>
    @if ($category->isNotEmpty())
    <div class="row">
        <div class="col-12 p-5">
            <h1 class="display-2 text-center">Ecco i nostri annunci</h1>
        </div>
        <section class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        @foreach ($category as $annunci)
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








    <div class="container my-3">
        <div class="row">
            @forelse ($category->advertisements as $announcement)
                <div class="col-12 col-md-4 my-2">
                    <div class="card shadow " style="width:18rem;">
                        <img src="https://picsum.photos/200/300" class="card-img-top p-3 rounded" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $announcement->title }}</h5>
                            <p class="card-text">{{ $announcement->body }}</p>
                            <a href="" class="btn-link shadow text-decoration-none ">Visualizza</a>
                            <p class="card-footer my-2">Pubblicato il: {{ $announcement->created_at->format('d/m/y') }} -
                                Autore: {{ $announcement->user->name ?? 'Sconosiuto' }}</p>
                        </div>
                    </div>
                </div>

            @empty
            <div class="col-12 my-4">
                <p class="fs-1">Non sono presenti annunci per questa categoria</p>
                <p class="fs-2 text-end">Pubblicane uno: <a href="{{ route('advertisement.create') }}" class="btn-link text-decoration-none">Nuovo Annuncio </a> </p>
            </div>
            @endforelse
        </div>
    </div>














</x-layout>
