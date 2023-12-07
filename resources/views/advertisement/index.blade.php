<x-layout>
    {{-- header Annunci --}}
    <header class="container-fluid p-5">
        <div class="row">
            <div class="col-12 p-5">
                <h1 class="display-2 text-center">{{ __('ui.allAnnouncements') }}</h1>
            </div>
            <section class="container-fluid">

                <div class="products-items row product-height">
                   {{--  <div class="col-md-3 col-sm-4 row "> --}}
                        @forelse ($advertisement as $annunci)
                            <div class="product-grid col-12 mx-2 col-md-3 my-2">
                                <div class="product-image p-3 mx-2">
                                    <img class="pic-1 rounded image" src="{{!$annunci->images()->get()->isEmpty() ? $annunci->images()->first()->getUrl(300,200):'https://picsum.photos/200/300'}}">
                                    <span class="product-discount-label">Nuovo</span>
                                    <ul class="product-links">
                                         <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>

                                        <li><a href="{{ route('categoryShow', ['category' => $annunci->category]) }}"
                                                data-tip="Categoria"><i class="fa-solid fa-list"></i></a></li>

                                        <li><a href="{{ route('advertisement.show', $annunci) }}"
                                                data-tip="Dettaglio"><i class="fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">{{ $annunci->title }}</h3>
                                    <div class="price"><span>{{ $annunci->price }}</span></div>
                                    <div class="">
                                        <p class="card-footer"><b>Pubblicato il:</b>
                                                {{ $annunci->created_at->format('d/m/y') }}<br>
                                               <b>Autore:</b> {{ $annunci->user->name ?? 'Sconosciuto' }}</p>

                                    </div>

                                </div>

                            </div>
                        @empty
                            <div class="col-12 my-4">
                                <p class="fs-1 p-3">Non sono presenti annunci </p>
                                <p class="fs-2 text-center">Pubblicane uno: <a
                                        href="{{ route('advertisement.create') }}"
                                        class="btn-link text-decoration-none">Nuovo Annuncio </a> </p>
                            </div>
                        @endforelse
                        {{ $advertisement->links() }}
                   {{--  </div> --}}

                </div>
            </section>








        </div>
    </header>

    {{-- sezione ricerca --}}
    {{-- <header class="container-fluid p-5">
    <h5 class="display-2 text-center"></h5>
 </header>
    <section class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @forelse ($advertisement as $annunci)
                        <div class="col-12 col-md-4 my-4">
                            <div class="card shadow" style="width: 18rem;">
                                <img src="https://picsum.photos/200" alt="" class="card-img-top p-3 rounded">
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
                        @empty
                        <div class="col-12">
                            <div class="alert py-3 shadow">
                                <p>Non ci sono annunci per questa ricerca</p>
                            </div>
                        </div>
                    @endforelse
                    {{$advertisement->links()}}
            </div>
        </div> --}}

</x-layout>
