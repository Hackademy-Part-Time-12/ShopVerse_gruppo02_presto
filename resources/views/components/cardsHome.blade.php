<div class="container my-3 col-12 col-md-8 ">
    <div class="card-sl">
        <div class="card-image">
            <img class="img-fluid"
                src="https://images.pexels.com/photos/1149831/pexels-photo-1149831.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
        </div>

        <a class="card-action" href="#"><i class="fa-solid fa-right-long"></i></a>
        <div class="card-heading">
            <h5>{{ $advertisement->title }}</h5>

        </div>
        <div class="card-text">
         <p class="text-truncate"><b>Informazioni</b><br>{{ $advertisement->body }}</p>
        </div>
        <div class="card-text">
            <p ><b>Prezzo</b>:{{ $advertisement->price }}€ </p>

        </div>
        <a href="#" class="card-button"> Purchase</a>
    </div>
</div>
