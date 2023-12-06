<x-layout>
    {{-- Header Titolo annuncio --}}
    <header class="container-fluid p-5">
        <div class="row">
            <div class="col-12 p-5">
                <h1 class="display-2 text-center">Annuncio {{ $advertisement->title }}</h1>
            </div>
        </div>
    </header>

    {{-- sezionecard-show con carosello immagini --}}
    <section class="container mb-5 pb-3">
        <div class="row col-12 align-items-center">

            <div id="showCarousel" class=" col-6 carousel slide " data-bs-ride="carousel">

                @if ($advertisement->images)
                    <div class="carousel-inner rounded">
                        @foreach ($advertisement->images as $image)
                            <div class="carousel-item rounded @if ($loop->first) active @endif">
                                <img src="{{ !$advertisement->images()->get()->isEmpty()
                                    ? Storage::url($advertisement->images()->first()->path)
                                    : 'https://picsum.photos/200/300' }}"
                                    class="img-thumbnail p-3 rounded-3" alt="">

                            </div>
                        @endforeach

                    </div>
                @else
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/200/300" class="img-fluid p-3 rounded" alt="">
                        </div>
                        <div class="carousel-item ">
                            <img src="https://picsum.photos/200/300" class="img-fluid p-3 rounded" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/200/300" class="img-fluid p-3 rounded" alt="">
                        </div>

                    </div>
                @endif
                <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previus</span>

                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previus</span>

                </button>
            </div>






            <div class="col-5">
                <div class="my-2 card-body ">
                    <h5 class="card-titolo">Titolo:{{ $advertisement->title }}</h5>
                    <p class="card-text"><b>Descrizione:</b> {{ $advertisement->body }} </p>
                    <p class="card-text">Prezzo:{{ $advertisement->price }} </p>

                </div>
                <div class=" mt-5 card-footer">
                    <a href="{{ route('categoryShow', ['category' => $advertisement->category]) }}"
                        class="btn-link border-top border-primary text-decoration-none "><b>Categoria:</b>
                        {{ $advertisement->category->name }}</a>
                    <p class="card-footer">Pubblicato il: {{ $advertisement->created_at->format('d/m/y') }} Autore
                        <b>{{ $advertisement->user->name ?? 'Sconosciuto' }}</b>
                    </p>

                </div>

            </div>
        </div>

    </section>

</x-layout>
