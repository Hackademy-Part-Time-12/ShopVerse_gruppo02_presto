<div class="col-12 col-md-3 shadow2 mx-1 product-grid my-4">
    <div class="product-image mx-2">
        <img class="pic-1 mt-1 rounded image" src="{{!$advertisement->images()->get()->isEmpty() ? $advertisement->images()->first()->getUrl(300,200) :'https://picsum.photos/200/300'}}">
        <span class="product-discount-label">Nuovo</span>
        <ul class="product-links">
            <li><a href="{{route('paypal.index', $advertisement)}}" data-tip="BUY"><i class="fa-solid fa-cart-shopping"></i></a></li>

            <li><a href="{{ route('categoryShow', ['category' => $advertisement->category])}}" data-tip="Categoria"><i class="fa-solid fa-list"></i></a></li>

            <li><a href="{{ route('advertisement.show', $advertisement) }}" data-tip="Dettaglio"><i class="fa fa-search"></i></a></li>
        </ul>
    </div>
    <div class="product-content">
        <h3 class="title">{{ $advertisement->title }}</h3>
        <div class="price"><span>€ {{ $advertisement->price }}</span></div>
        <div class="">
            <p class="card-footer"><b>Pubblicato il: </b>{{ $advertisement->created_at->format('d/m/y') }}</p>

        </div>

    </div>

</div>