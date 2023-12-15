<div class="row justify-content-center bg-form  pt-5  ">

    <h2 class="text-center fs-1 second ">Modifica Annuncio</h2>




    <div class="container col-7 my-5">
        @if (session('messageEdit'))
            <div class="alert alert-primary ">

                <div class="alert alert-primary">
                    <p class="text-black fw-bold ">{{ session('messageEdit') }}</p>
                </div>
        @endif



        <form class="" wire:submit.prevent="update">
            @csrf
            <div class="mb-3 row ">
                <label for=" text" class="second">Titolo annuncio</label>
                <input type="text" wire:model.live="title" id="title"
                    class="@error('text') is-invalid @enderror border form-control">
                @error('title')
                    <p class=" text-danger ">{{ $message }}</p>
                @enderror

            </div>


            <div class="mb-3 row">
                <label for="price"class="second" >Prezzo</label>
                <input type="number" wire:model.live="price" id="price"
                    class="@error('text') is-invalid @enderror border form-control">
                @error('price')
                    <p class=" text-danger ">{{ $message }}</p>
                @enderror

            </div>






            <div class="mb-3 row ">
                    <select class=" form-control second " wire:model="category" id="category"> {{-- defer fa in modo che le select non vadano in conflitto --}}
                        <option value="" class="second">Scegli la categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    @error('category')
                        <p class="text-danger ">{{ $message }}</p>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="body" class="second">Descrizione</label>
                <textarea class="form-control border " wire:model.live="body" @error('body') is-invalid @enderror
                    placeholder='Descrizione' id="body" cols="19" rows="6"></textarea>
                @error('body')
                    <p class="text-danger ">{{ $message }}</p>
                @enderror
            </div>
            {{-- @dd($image) --}}
            @if ($old_image->isNotEmpty())
            <div class="mb-3">
                <label for="" class="second">Immagini attuali</label>
               @foreach ($old_image as $key => $image )

                <div class=" my-3">
                    <div class="col-12 mx-auto text-center ">
                        <img src=" {{$image->getUrl(300, 200)}}" class="img-fluid col-4 shadow rounded" alt="">
                    </div>
                    <button type="button"
                        class="btn btn-danger shadow d-block text-center mt-2 mx-auto"
                        wire:click="removeImageOld({{ $key }})">Cancella</button>
                </div>
                @endforeach
            </div>

            @endif



            <div class="mb-3">
                <input type="file" wire:model="temporary_images" name="images" multiple
                    class="form-control shadow @error('temporary_images.*') is-invalid @enderror">
                @error('temporary_images.*')
                    <p class="text-danger ">{{ $message }}</p>
                @enderror

            </div>

            @if ($images)
                <div class="row col">
                    <div class="col">
                        <p class="second">Anteprima</p>
                        <div class="row border border-4 border-info rounded shadow ">
                            @foreach ($images as $key => $image)
                                <div class=" my-3">
                                    <div class="col-12 mx-auto text-center ">
                                        <img src="{{$image->temporaryUrl()}}" class="img-fluid col-4 shadow rounded" alt="">
                                    </div>
                                    <button type="button"
                                        class="btn btn-danger shadow d-block text-center mt-2 mx-auto"
                                        wire:click="removeImage({{ $key }})">Cancella</button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            @endif
            <div class="text-center ">
                <button type="submit" class="button-86">Modifica</button>

            </div>


        </form>
    </div>


</div>
