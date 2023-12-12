<x-layout>

    <div class="container" >
        <div class="row mt-5 mb-5 ">
        <div class="col-2 offset-5 mt-5">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-white text-center mb-4">{{ $advertisement->title }}</h3>
                        <img src="{{ !$advertisement->images()->get()->isEmpty()? $advertisement->images()->first()->getUrl(300, 200): 'https://picsum.photos/200/300' }}" class="img-fluid mx-auto d-block my-4" alt="Immagine Inserzione">
                    </div>
                    <div class="card-body">

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        <center>
                            <a href="{{ route('paypal.payment', ['price'=>$advertisement->price]) }}" class="btn btn-success">Paga {{$advertisement->price}}€ con PayPal </a>
                        </center>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>