<div class="container-fluid">
    <h3 class="fs-2 fw-bold ms-4 pb-3 gradient">{{__('ui.home4')}}</h3>
</div>


<section class=" container rounded-4 d-flex justify-content-center shadow my-5 bg-home">


    @if ($annunci->isnotEmpty())

        <div class="products-items row justify-content-center  product-height w-100">
            <div class="row col-12 justify-content-center ">
                @foreach ($annunci as $annunci)
                    <x-cardsHome :advertisement="$annunci" />
                @endforeach

            </div>



        </div>
    @else
        <div class="col-12 my-4">
            <p class="fs-1 text-center text-light ">{{__('ui.advNo') }}</p>
            <p class="fs-2 text-center text-light  ">{{__('ui.advNo2') }} <a href="{{ route('advertisement.create') }}"
                    class="text-light text-decoration-none">{{__('ui.advNew') }}</a> </p>
        </div>

    @endif

</section>
