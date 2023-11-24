<x-layout>
    <div class="container-fluid p-5 shadow my-4">
        <div class="row">
            <div class="col-12 h mt-3">
                <h1 class="display-2 text-center">{{ $category->name }}</h1>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            @forelse ($category->advertisements as $announcement)
                <div class="col-12 col-md-4 my-2">
                    <div class="card shadow " style="width:18rem;">
                        <img src="http:/picsum.photos/200" class="card-img-top p-3 rounded" alt="">
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
                <p class="fs-2 text-end">Pubblicane uno: <a href="{{ route('advertisement.create') }}" class="btn-link shadow text-decoration-none">Nuovo Annuncio </a> </p>
            </div>
            @endforelse
        </div>
    </div>














</x-layout>
