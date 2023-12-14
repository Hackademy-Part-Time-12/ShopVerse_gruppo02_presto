<x-layout>



<div class="container my-5">
    <div class="card mb-3" style="max-width: 540px; margin: 0 auto;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{!$advertisement->images()->get()->isEmpty()? $advertisement->images()->first()->getUrl(300, 200): 'https://picsum.photos/200/300' }}" class=" mx-auto d-block rounded-start" alt="Immagine Inserzione">
            </div>
            <div class="col-md-8">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">{{ $advertisement->title }}</h5>
                    <p class="card-text">{{ $advertisement->body }}</p>
                    <a href="{{ route('paypal.payment', ['price'=>$advertisement->price]) }}" class="btn btn-success mt-auto">Paga {{$advertisement->price}}€ con PayPal </a>
                </div>
            </div>
        </div>
    </div>
</div>



            
            <!--Waves Container-->
            <div style="position:relative; bottom:0%">
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

        </div>

    </section>
</x-layout>