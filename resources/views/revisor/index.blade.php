<x-layout>
    <div class="container-fluid mt-5  p-5 shadow">
        <div class="row">
            <div class="col-12 p-5 bg-white rounded shadow">
                <h2>
                    {{ $announcement_to_check ? __('ui.IndexRevisore') : __('ui.noIndexRevisore') }}
                </h2>
            </div>
        </div>
    </div>
    @if ($announcement_to_check)
        <div class="container d-flex justify-content-center p-3">
            <div class="row col-12 justify-content-center ">
                <div class=" row col-10  justify-content-center ">
                    <div class="card row shadow">

                        <div class="col-12">

                            @if ($announcement_to_check->images)
                                <div class="row">

                                    @foreach ($announcement_to_check->images as $image)
                                        <div class="col-12 col-md-4 ">
                                            <img src="{{ $image->getUrl(300, 200) }}" class="img-fluid p-3 rounded"
                                                alt="">
                                            <div class="col-12 col-md-4 my-2 mx-2 justify-content-around d-flex">
                                                <div class="card-body">
                                                    <h5 class="tc-accent">Revisione Immagini</h5>
                                                    <p> Adulti <span class=" {{ $image->adult }}"></span> </p>
                                                    <p> Satira <span class=" {{ $image->spoof }}"></span> </p>
                                                    <p> Medicina <span class=" {{ $image->medical }}"></span> </p>
                                                    <p> Violenza <span class=" {{ $image->violence }}"></span> </p>
                                                    <p> Contenuto Ammiccante <span class="{{ $image->racy }}"></span>
                                                    </p>
                                                </div>


                                            </div>

                                            <div class=" col-12 me-5 ">
                                                <h5 class='tc-accent mt-3'>Tags</h5>
                                                <div class="p-2">
                                                    @if ($image->labels)
                                                        @foreach ($image->labels as $label)
                                                            <p class="d-inline"> {{ $label }},</p>
                                                        @endforeach
                                                    @endif

                                                </div>

                                            </div>

                                        </div>
                                    @endforeach
                                </div>

                            @endif

                        </div>


                        <div class="card-body border roudend-1 shadow">
                            <h5 class="card-title"> Titolo<br> {{ $announcement_to_check->title }}</h5>
                            <p class="card-text">
                                <b>{{ __('ui.advDescrizione') }}</b><br>{{ $announcement_to_check->body }}
                            </p>
                            <p class="card-text"><b>{{ __('ui.advPrezzo') }}</b> {{ $announcement_to_check->price }} €
                            </p>
                            <a href="{{ route('advertisement.show', ['advertisement' => $announcement_to_check]) }}"
                                class="link text-decoration-none ">Dettagli</a>
                        </div>

                        {{-- bottone accetta/Rifiuta --}}
                        <div class="row text-center my-3">
                            <div class="col-4 d-flex">
                                <form class="p-1"
                                    action="{{ route('revisor.accept_announcement', ['advertisement' => $announcement_to_check]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success shadow">
                                        Accetta
                                    </button>
                                </form>
                                <form class="p-1"
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
                </div>
            </div>
        </div>
    @endif



</x-layout>
