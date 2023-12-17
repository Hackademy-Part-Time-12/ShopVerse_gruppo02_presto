<section class=" html body p-0 row d-flex justify-content-center ">


    <section class="hero-section col-12 row rounded-3   ">
        <div class="col-12 text-center my-4">
            <h2 class="fs-1 fw-bold text-color">{{ __('ui.home2') }}</h2>

        </div>



        <div class="card-grid row col-12 col-md-8 my-1 justify-content-center">
            @foreach ($categories as $category)
                <a class="card1 col-4 col-md-2 " href="{{ Route('categoryShow', $category) }}">
                    <div class="card__background"
                        style="background-image: url(https://images.unsplash.com/photo-1557177324-56c542165309?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80)">
                    </div>
                    <div class="card__content">
                        <p class="card__category"><b class="categoria50">{{ $category->name }}</b></p>
                    </div>
                </a>
            @endforeach
        </div>





    </section>
</section>
