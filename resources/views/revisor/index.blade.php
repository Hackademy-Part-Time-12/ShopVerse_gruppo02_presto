<x-layout>
    <div class="container-fluid  p-5 shadow">
        <div class="row">
            <div class="col-12 p-5">
                <h2>
                    {{ $announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare' }}
                </h2>
            </div>
        </div>
    </div>
    @if ($announcement_to_check)
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card  my-2 mx-3 shadow" style="width: 18rem;">
                        <div id="showCarousel" class=" carousel slide" data-bs-ride="carousel">
                            @if ($announcement_to_check->images)
                                <div class="carousel-item">
                                    @foreach ($announcement_to_check->images as $image)
                                        <img src="{{ Storage::url($image->path) }}" class="img-fluid p-3 rounded"
                                            alt="">
                                    @endforeach

                                </div>
                            @else
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="" class="img-fluid p-3 rounded" alt="">
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="" class="img-fluid p-3 rounded" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="" class="img-fluid p-3 rounded" alt="">
                                    </div>

                                </div>
                            @endif
                            <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previus</span>

                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previus</span>

                            </button>

                        </div>

                        <div class="card-body ">
                            <h5 class="card-title">{{ $announcement_to_check->title }}</h5>
                            <p class="card-text"><b>Descrizione:</b><br>{{ $announcement_to_check->body }}</p>
                            <p class="card-text"><b>Prezzo:</b>{{ $announcement_to_check->price }}</p>
                        </div>
                        <div class="row my-2">
                            <a href="{{ route('advertisement.show', ['advertisement' => $announcement_to_check]) }}"
                                class="link text-decoration-none ">Dettagli</a>
                            {{-- <a href="{{ route('categoryShow',['category'=>$announcement_to_check->advertisement->category])}}" class="link text-decoration-none "><b>Categoria: </b>{{ $announcement_to_check->category->name }}</a> --}}
                        </div>
                        {{-- bottone accetta --}}
                        <div class="row">
                            <div class="col-4">
                                <form
                                    action="{{ route('revisor.accept_announcement', ['advertisement' => $announcement_to_check]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success shadow">
                                        Accetta
                                    </button>
                                </form>
                            </div>

                        </div>
                        <div class="col-4">
                            <form
                                action="{{ route('revisor.reject_announcement', ['advertisement' => $announcement_to_check]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-danger shadow">
                                    Rifiuta
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
    @endif
    </div>
    </div>


</x-layout>
