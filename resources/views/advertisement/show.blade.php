<x-layout>
    {{-- sezionecard-show con carosello immagini --}}
    <section class="container-fluid header p-0 ">
        <div class="row p-0">
            <section class="container-fluid mt-4">
                <div class="row">
                    <div class="col-12">
                        <h1 class="display-2 text-center">{{ $advertisement->title }}</h1>
                    </div>
                </div>
            </section>
            {{-- Header Titolo annuncio --}}
            <header class="container  row justify-content-center  mt-5">
                <div class="col-12 col-md-7">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        @if ($advertisement->images)
                            <div class="carousel-inner">
                                @foreach ($advertisement->images as $image)
                                    <div class="carousel-item  @if ($loop->first) active @endif ">

                                        <img src="{{ $image->getUrl(900, 500) }}" class="img-fluid p-3 rounded-3"
                                            alt="">
                                    </div>
                                @endforeach


                            </div>
                        @else
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://picsum.photos/200/300" class="img-fluid p-3 rounded"
                                        alt="">
                                </div>
                                <div class="carousel-item ">
                                    <img src="https://picsum.photos/200/300" class="img-fluid p-3 rounded"
                                        alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/200/300" class="img-fluid p-3 rounded"
                                        alt="">
                                </div>

                            </div>

                        @endif
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                    <div class="col-12 col-md-5 text-start ">
                        <h5 class="fw-light p-2 "><b>Tipo annuncio:</b><a class="text-decoration-none"
                                href="{{ route('categoryShow', ['category' => $advertisement->category]) }}">{{ $advertisement->category->name }}</a>
                        </h5>
                        <h5 class="fw-light p-2"><b>Pubblicato il:</b>
                            {{ $advertisement->created_at->format('d/m/y') }}
                        </h5>
                        <h5 class="fw-light p-2"><b>Autore:</b> {{ $advertisement->user->name ?? 'Sconosciuto' }}</h5>
                        <div class="col-12 col-md-5 text-start mt-5">
                            <h3><b>Descrizione</b></h3>
                            <p>{{$advertisement->body }}</p>


                        </div>

                    </div>

            </header>

            <!--Waves Container-->
            <div class="">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
            <!--Waves end-->

        </div>
        <!--Header ends-->

        <!--Content starts-->
        <div class="content flex">
           <div class="">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>

           </div>

        </div>

    </section>


</x-layout>
