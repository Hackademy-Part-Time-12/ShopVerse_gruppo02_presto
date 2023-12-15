<x-layout>

    <!-- <div class="container" style="margin-top: 25vh;">
    <div class="card mb-3" style="max-width: 1024px; max-height: 2000px; margin: 0 auto; position: relative;">
        <div class="row g-0">
            <div class="col-md-7" style="border: none;">
                
                <img style="border-radius: 10px; box-shadow: 0px 0px 10px burlywood; " src="{{ !$advertisement->images()->get()->isEmpty() ? $advertisement->images()->first()->getUrl(300, 200) : 'https://picsum.photos/200/300' }}" class="mx-auto d-block rounded-start" alt="Immagine Inserzione">
                    
            </div>
            
            <div class="col-md-5">
                <div class="card-body d-flex flex-column justify-content-between text-end" style="height: 100%;">
                
               
                    <h5 class="card-title">{{ $advertisement->title }}</h5>
                    <p class="card-text">{{ $advertisement->body }}</p>
                    <p class="card-text">{{$advertisement->price}}€</p>
                    <div class="mt-auto d-flex justify-content-between">
                        <a href="{{ route('advertisement.show', $advertisement) }}" data-tip="{{ __('ui.Dettaglio') }}" class="btn btn-primary btn-sm me-2"><i class="fa fa-search"></i></a>
                        <a href="{{ route('paypal.payment', ['price'=>$advertisement->price]) }}" class="btn btn-warning btn-sm ms-2" style="font-size:small;" >{{ __('ui.Paga') }}  {{ __('ui.Con_Paypal') }} </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->



<div class="card" style="margin-top: 15vh; max-width: 940px;">
<p class="mt-4"><a href="{{url()->previous()}}"> <i class="btn fa-solid fa-arrow-left-long fa-2xl"></i></a>{{ __('ui.Torna_Indietro') }}</p>
    <img style="border-radius: 10px; box-shadow: 0px 0px 10px burlywood; " src="{{ !$advertisement->images()->get()->isEmpty() ? $advertisement->images()->first()->getUrl(900, 500) : 'https://picsum.photos/900/500' }}" class="mx-auto d-block rounded-start mt-4" alt="Immagine Inserzione">
    <div class="card-body">
        <h5 class="card-title text-center"> {{ $advertisement->title }}</h5>
        <p class="card-text text-center"> {{ $advertisement->body }}</p>
    </div>
    <div class="mt-auto d-flex justify-content-center mb-3">
        <a href="{{ route('advertisement.show', $advertisement) }}" data-tip="{{ __('ui.Dettaglio') }}" class="btn btn-primary btn-sm me-2"><i class="fa fa-search"></i></a>
        <a href="{{ route('paypal.payment', ['price'=>$advertisement->price]) }}" class="btn btn-warning btn-sm ms-2" style="font-size:small;">{{ __('ui.Paga') }}  {{$advertisement->price}}€ {{ __('ui.Con_Paypal') }} </a>
    </div>
</div>





<!--     <div class="card mb-3" >
    <img style="border-radius: 10px; box-shadow: 0px 0px 10px burlywood; " src="{{ !$advertisement->images()->get()->isEmpty() ? $advertisement->images()->first()->getUrl(900, 500) : 'https://picsum.photos/900/500' }}" class="mx-auto d-block rounded-start" alt="Immagine Inserzione">
        <div class="card-body">
            <h5 class="card-title">{{ $advertisement->title }}</h5>
            <p class="card-text">{{ $advertisement->body }}</p>
            <p class="card-text"><small class="text-body-secondary">{{$advertisement->price}}€</small></p>
        </div>
        <div class="mt-auto d-flex justify-content-center">
            <a href="{{ route('advertisement.show', $advertisement) }}" data-tip="{{ __('ui.Dettaglio') }}" class="btn btn-primary btn-sm me-2"><i class="fa fa-search"></i></a>
            <a href="{{ route('paypal.payment', ['price'=>$advertisement->price]) }}" class="btn btn-warning btn-sm ms-2" style="font-size:small;">{{ __('ui.Paga') }} {{ __('ui.Con_Paypal') }} </a>

        </div>
    </div>
 -->




    <section class="waves-container">
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
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
    </section>

    <style>
        body {
            background: linear-gradient(60deg, rgb(219, 212, 248) 0%, rgba(0, 172, 193, 1) 100%);
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            /* Per evitare l'overflow orizzontale */
        }

        .waves-container {
            margin-left: -20px;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: -1;
            /* Assicura che le onde siano dietro il contenuto principale */
        }

        .waves {
            position: relative;
            margin-left: -20px;
            margin: 0;
            padding: 0;
            bottom: 0;
            width: 120%;
            overflow: hidden;
            height: 15vh;
            margin-bottom: -7px;
            /* Fix for safari gap */
            min-height: 100px;
            max-height: 150px;
        }
    </style>

</x-layout>