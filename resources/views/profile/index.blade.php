<x-layout>

    <section class="container-fluid my-5">
        <div class="col-12 row my-5">
            <div class="my-5 py-5 text-center">
                <h1>{{__('ui.ciao')}} {{Auth::user()->name }}</h1>
            </div>
            @if (session('messageImg'))
            <div class="alert alert-primary ">

                <div class="alert alert-primary">
                    <p class="text-black fw-bold ">{{ session('messageImg') }}</p>
                </div>
            </div>
        @endif



            <div class="products-items w-100 justify-content-center my-5  row product-height">
                {{--  <div class="col-md-3 col-sm-4 row "> --}}
                @forelse ($announcements as $annunci)
                    <div class="product-grid mx-1 col-md-3 my-2">
                        <div class="product-image p-3">
                            <img class="pic-1 rounded image"
                                src="{{ !$annunci->images()->get()->isEmpty()? $annunci->images()->first()->getUrl(300, 200): 'https://picsum.photos/200/300' }}">
                            <span class="product-discount-label">{{$annunci->created_at->format('d/m/y')}}</span>
                            <ul class="product-links">
                                {{-- <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                </li> --}}

                                <li><a href="{{ route('categoryShow', ['category' => $annunci->category]) }}"
                                        data-tip="Categoria"><i class="fa-solid fa-list"></i></a></li>

                                <li><a href="{{ route('advertisement.show', $annunci) }}" data-tip="Dettaglio"><i
                                            class="fa fa-search"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-content mt-1 ">
                            <h3 class="title text-black">{{ $annunci->title }}</h3>
                            <div class="price"><span>{{ $annunci->price }}</span></div>
                            <div class="row justify-content-center">
                                <p class="btn-link col"><a href="{{route('advertisement.edit',$annunci)}}" class="text-warning fw-bold ">Modifica</a></p>
                                <p class="btn-link col"><a href="{{ route('advertisement.delete', $annunci) }}" class="text-danger fw-bold ">Elimina</a></p>
                              {{--   <p class="card-footer text-black "><b>Pubblicato il:</b>
                                    {{ $annunci->created_at->format('d/m/y') }}<br>
                                    <b>Autore:</b> {{ $annunci->user->name ?? 'Sconosciuto' }}
                                </p> --}}

                            </div>

                        </div>

                    </div>
                @empty
                    <div class="col-12 my-4">
                        <p class="fs-1 text-center">{{__('ui.advNo')}}</p>
                        <p class="fs-2 text-center">{{__('ui.advNo2')}}<a href="{{ route('advertisement.create') }}"
                                class="btn-link text-decoration-none">{{__('ui.advNew')}} </a> </p>
                    </div>
                @endforelse



            </div>

        </div>
    </section>











</x-layout>
