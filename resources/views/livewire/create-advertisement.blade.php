<section class=" container my-5 pt-3">
    <div class="row justify-content-center pt-5 border border-primary rounded-3 shadow">

        <h2 class="text-center fs-1 ">Inserisci Annuncio</h2>




        <div class="container col-7 my-5">
            @if (session('messageImg'))
                <div class="alert alert-primary ">

                    <div class="alert alert-primary">
                        <p class="text-black fw-bold ">{{ session('messageImg') }}</p>
                    </div>
            @endif



            <form class="" wire:submit.prevent="store">
                @csrf
                <div class="mb-3 row ">
                    <label for="title">Titolo annuncio</label>
                    <input type="text" wire:model.live="title" id="title"
                        class="@error('text') is-invalid @enderror border form-control">
                    @error('title')
                        <p class=" text-danger ">{{ $message }}</p>
                    @enderror

                </div>


                <div class="mb-3 row">
                    <label for="price">Prezzo</label>
                    <input type="number" wire:model.live="price" id="price"
                        class="@error('text') is-invalid @enderror border form-control">
                    @error('price')
                        <p class=" text-danger ">{{ $message }}</p>
                    @enderror

                </div>




                <div class="mb-3 row ">
                    <select class=" form-control  " wire:model.defer="category" id="category"> {{-- defer fa in modo che le select non vadano in conflitto --}}
                        <option value="">Scegli la categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    @error('category')
                        <p class="text-danger ">{{ $message }}</p>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="body">Descrizione</label>
                    <textarea class="form-control border " wire:model.live="body" @error('body') is-invalid @enderror
                        placeholder='Descrizione' id="body" cols="15" rows="6"></textarea>
                    @error('body')
                        <p class="text-danger ">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="file" wire:model="temporary_images" name="images" multiple
                        class="form-control shadow @error('temporary_images.*') is-invalid @enderror">
                    @error('temporary_images.*')
                        <p class="text-danger ">{{ $message }}</p>
                    @enderror

                </div>
                @if (!empty($images))
                    <div class="row col">
                        <div class="col">
                            <p>Anteprima</p>
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
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>


            </form>
        </div>


    </div>



</section>
