<x-layout>
    <div class="container-fluid  p-5 shadow">
        <div class="row">
            <div class="col-12 p-5">
                <h2>
                    {{ $announcement_to_check ? __('ui.indexRevisore') : __('ui.noIndexRevisore')}}
                </h2>
            </div>
        </div>
    </div>
    @if ($announcement_to_check)
        <div class="container">
            <div class="row  ">
                <div class="col-12 d-flex justify-content-center  ">
                    <div class="card col-12 col-md-4   shadow" >
                        <div id="showCarousel" class=" carousel slide" data-bs-ride="carousel">

                            @if ($announcement_to_check->images)

                                    @foreach ($announcement_to_check->images as $image)
                                    <div class="carousel-inner row">
                                        <div class="carousel-item @if ($loop->first) active @endif">
                                            <img src="{{$image->getUrl(300 , 200)}}" class="img-fluid p-3  rounded"
                                                alt="">

                                        </div>
                                    </div>




                                        <div class="col  border-end">
                                            <h5 class='tc-accent mt-3'>Tags</h5>
                                            <div class="p-2">
                                                @if ($image->labels)
                                                @foreach ($image->labels as $label )
                                                <p class="d-inline">{{$label}},</p>
                                                @endforeach
                                                @endif

                                            </div>

                                        </div>
                                        <div class="col">
                                            <div class="card-body">
                                                <h5 class="tc-accent">Revisione Immagini</h5>
                                                <p> Adulti<span class="{{$image->adult }}"></span> </p>
                                                <p> Satira<span class="{{$image->spoof }}"></span> </p>
                                                <p> Medicina<span class="{{$image->medical }}"></span> </p>
                                                <p> Violenza<span class="{{$image->violence }}"></span> </p>
                                                <p> Contenuto Ammiccante<span class="{{$image->racy }}"></span> </p>
                                            </div>
                                        </div>


                                    @endforeach


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

                        <div class="card-body ">
                            <h5 class="card-title">{{ $announcement_to_check->title }}</h5>
                            <p class="card-text"><b>{{__('ui.advDescrizione')}}</b><br>{{ $announcement_to_check->body }}</p>
                            <p class="card-text"><b>{{__('ui.advPrezzo')}}</b>{{ $announcement_to_check->price }}</p>
                        </div>
                        {{-- Dettaglio --}}
                        <div class="row my-2">
                            <a href="{{ route('advertisement.show', ['advertisement' => $announcement_to_check]) }}"
                                class="link text-decoration-none ">Dettagli</a>
                            {{-- <a href="{{ route('categoryShow',['category'=>$announcement_to_check->advertisement->category])}}" class="link text-decoration-none "><b>Categoria: </b>{{ $announcement_to_check->category->name }}</a> --}}
                        </div>
                        {{-- bottone accetta/Rifiuta--}}
                        <div class="row justify-content-between my-3">
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
                            <div class="col-4">
                                <form  action="{{ route('revisor.reject_announcement', ['advertisement' => $announcement_to_check]) }}"
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
    @endif
    </div>
    </div>


</x-layout>
