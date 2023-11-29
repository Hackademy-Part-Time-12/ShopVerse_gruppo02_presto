<x-layout>
<div class="container-fluid  p-5 shadow">
    <div class="row">
        <div class="col-12 p-5">
            <h2>
                {{$announcement_to_check ?'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
            </h2>
            <div class="col-12 col-md-6">
                <form action="{{route('annulla.operazione', ['advertisement'=>$announcement_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                    <button type="submit" class="btn btn-warning shadow">
                    Annulla operazione precedente
                    </button>
                </form>
        </div>
    </div>
</div>
@if($announcement_to_check)
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card  my-2 mx-3 shadow" style="width: 18rem;">
                <img src="https://picsum.photos/200/300" style="height: 220px;" class=" card-img-top mt-1" alt="...">
                <div class="card-body ">
                    <h5 class="card-title">{{ $announcement_to_check->title }}</h5>
                        <p class="card-text"><b>Descrizione:</b><br>{{ $announcement_to_check->body }}</p>
                        <p class="card-text"><b>Prezzo:</b>{{ $announcement_to_check->price}}</p>
                </div>
                <div class="row my-2">
                    <a href="{{ route('advertisement.show', ['advertisement'=>$announcement_to_check])}}" class="link text-decoration-none ">Dettagli</a>
                    {{-- <a href="{{ route('categoryShow',['category'=>$announcement_to_check->advertisement->category])}}" class="link text-decoration-none "><b>Categoria: </b>{{ $announcement_to_check->category->name }}</a> --}}
                </div>
                {{-- bottone accetta --}}
                <div class="row">
                    <div class="col-12 col-md-6">
                    <form action="{{route('revisor.accept_announcement', ['advertisement'=>$announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <button type="submit" class="btn btn-success shadow">
                            Accetta
                        </button>
                    </form>
                    </div>
                   
                    </div>
                    <div class="col-12 col-md-6">
                        <form action="{{route('revisor.reject_announcement', ['advertisement'=>$announcement_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                            <button type="submit" class="btn btn-danger shadow">
                            Rifiuta
                            </button>
                        </form>
                    </div>
                </div>
              </div>
           @endif 
        </div>
    </div>
</div>

</x-layout>