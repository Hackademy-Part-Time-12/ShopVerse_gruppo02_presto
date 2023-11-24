<div class="card  my-2 mx-3 shadow" style="width: 18rem;">
    <img src="https://picsum.photos/200/300" style="height: 220px;" class=" card-img-top mt-1" alt="...">
    <div class="card-body ">
      <h5 class="card-title">{{ $advertisement->title }}</h5>
      <p class="card-text"><b>Descrizione:</b><br>{{ $advertisement->body }}</p>
      <p class="card-text"><b>Prezzo:</b>{{ $advertisement->price}}</p>
    </div>
    <div class="row my-2">
        <a href="{{ route('advertisement.show',$advertisement) }}" class="link text-decoration-none ">Dettagli</a>
        <a href="{{ route('categoryShow',['category'=>$advertisement->category])}}" class="link text-decoration-none "><b>Categoria: </b>{{ $advertisement->category->name }}</a>
    </div>
    <div class="">
        <p class="card-footer"><b>Pubblicato il: </b>{{ $advertisement->created_at->format('d/m/y')}}</p>

    </div>
  </div>
