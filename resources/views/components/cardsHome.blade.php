<div class="container products-items">

        <div class="col-md-3  row col-sm-6 product-height">
            <div class="product-grid">
                <div class="product-image">
                  <img class="pic-1 image" src="">
                    <span class="product-discount-label">-33%</span>
                    <ul class="product-links">
                        {{-- <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li> --}}

                        <li><a href="{{ route('categoryShow', ['category' => $advertisement->category])}}"
                                data-tip="Categoria"><i class="fa-solid fa-list"></i></a></li>

                        <li><a href="{{ route('advertisement.show', $advertisement) }}" data-tip="Dettaglio"><i
                                    class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title">{{ $advertisement->title }}</h3>
                    <div class="price"><span>{{ $advertisement->price }}</span> $66.00</div>
                    <div class="">
                        <p class="card-footer"><b>Pubblicato il: </b>{{ $advertisement->created_at->format('d/m/y') }}</p>

                    </div>

                </div>

            </div>
        </div>
</div>






