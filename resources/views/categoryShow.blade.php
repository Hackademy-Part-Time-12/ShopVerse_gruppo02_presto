<x-layout>
    {{-- header Annunci --}}
    <section class="container-fluid headerCategory p-0">
        <div class="row">
            <!--Content before waves-->
            <div class="inner-header col flex mb-5">
                <h1 class="h1">{{ $category->name }}</h1>
            </div>

            {{-- Sezione menu categorie --}}
            <div class=" col-12 row text-center ms-2 my-5 ">
                <div class="row col-12 justify-content-center">
                    @foreach ($categories as $category)
                        <li class=" row col-4 mx-2 col-md-2">
                            <a class=" line  " href="{{ route('categoryShow', $category) }}">{{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </div>


            </div>

            <section class=" col-11 col-md-9 d-flex justify-content-center container-fluid">

                <div class="products-items w-100 justify-content-center  row product-height">
                    @forelse ($advertisement as $annunci)
                        <div class="product-grid mx-1 col-md-5 my-2">
                            <div class="product-image p-3" >
                                <img class="pic-1 rounded image"
                                    src="{{ !$annunci->images()->get()->isEmpty()? $annunci->images()->first()->getUrl(300, 200): 'https://picsum.photos/200/300' }}">
                                {{-- <span class="product-discount-label">{{ $annunci->category->name }}</span> --}}
                                <ul class="product-links">
                                    {{-- <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                    </li> --}}

                                    <li><a href="{{ route('paypal.index', $annunci) }}"
                                            data-tip="{{ __('ui.Compra') }}"><i
                                                class="fa-solid fa-cart-shopping"></i></a>
                                    </li>

                                    <li>
                                        <a href="{{ route('advertisement.show', $annunci) }}"
                                            data-tip="{{ __('ui.Dettaglio') }}"><i class="fa fa-search"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-content mt-1">
                                <h3 class="title text-black mt-3">{{ $annunci->title }}</h3>
                                <div class="price"><span>{{ $annunci->price }}</span></div>
                                <div class="">
                                    <p class="card-footer text-black "><b>Pubblicato il:</b>
                                        {{ $annunci->created_at->format('d/m/y') }}<br>
                                        <b>Autore:</b> {{ $annunci->user->name ?? 'Sconosciuto' }}
                                    </p>

                                </div>

                            </div>

                        </div>
                    @empty
                        <div class="col-12 my-4">
                            <p class="fs-1 p-3 text-start ">{{ __('ui.advNo') }} </p>
                            <p class="fs-2 text-center">{{ __('ui.advNo2') }} <a
                                    href="{{ route('advertisement.create') }}"
                                    class="btn-link text-decoration-none">{{ __('ui.advNew') }}</a> </p>
                        </div>
                    @endforelse

                    {{ $advertisement->links() }}


                </div>



            </section>


          {{--   <div class="col-2 mt-3 ">
                <a href="{{url()->previous()}}"> <button class="button-17" role="button">Indietro</button></a>


            </div> --}}
            <!--Waves Container-->
            <div class="">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax ">
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

        </div>

    </section>
</x-layout>
