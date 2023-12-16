<section class=" container my-5">
    <div class="col-2 mt-3 text-start ">
        <a href="{{url()->previous()}}"> <button class="button-17" role="button">Indietro</button></a>


    </div>


    <div class="row col-12 justify-content-center bg-form ms-5 pt-5  ">

        <h2 class="text-center fs-1 second ">{{ __('ui.btnLog') }}</h2>





        <div class="container justify-content-center  col-7 my-5">
            @if (session('messageImg'))
                <div class="alert alert-primary ">

                    <div class="alert alert-primary">
                        <p class="text-black fw-bold ">{{ session('messageImg') }}</p>
                    </div>
                </div>
            @endif




            <form class="" wire:submit.prevent="store">
                @csrf
                <div class="mb-3 row ">
                    <label for=" text" class="second">{{ __('ui.advTitolo') }}</label>
                    <input type="text" wire:model.live="title" id="title"
                        class="@error('text') is-invalid @enderror border form-control">
                    @error('title')
                        <p class=" text-danger ">{{ $message }}</p>
                    @enderror

                </div>


                <div class="mb-3 row">
                    <label for="price"class="second">{{ __('ui.advPrezzo') }}</label>
                    <input type="number" wire:model.live="price" id="price"
                        class="@error('text') is-invalid @enderror border form-control">
                    @error('price')
                        <p class=" text-danger ">{{ $message }}</p>
                    @enderror

                </div>




                <div class="mb-3 row ">
                    <select class=" form-control second " wire:model.defer="category" id="category">
                        {{-- defer fa in modo che le select non vadano in conflitto --}}
                        <option value="" class="second">{{ __('ui.advCategoria') }}</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    @error('category')
                        <p class="text-danger ">{{ $message }}</p>
                    @enderror

                </div>





                <div class="mb-3">
                    <label for="body" class="second">{{ __('ui.advDescrizione') }}</label>
                    <textarea class="form-control border " wire:model.live="body" @error('body') is-invalid @enderror
                        placeholder="{{ __('ui.advDescrizione') }}" id="body" cols="19" rows="6"></textarea>
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
                            <p class="second">{{ __('ui.advAnteprima') }}</p>
                            <div class="row border border-4 border-info rounded shadow ">
                                @foreach ($images as $key => $image)
                                    <div class="col-md-3 mx-auto my-3">
                                        <div class=" text-center  img-preview mx-auto shadow">
                                             <img src="{{ $image->temporaryUrl() }}"
                                                class="img-thumbnail " alt="">
                                        </div>
                                        <button type="button"
                                            class="btn btn-danger shadow d-block text-center mt-2 mx-auto"
                                            wire:click="removeImage({{ $key }})">{{ __('ui.advCancella') }}
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                @endif
                <div class="text-center ">
                    <button type="submit" class="button-86">{{ __('ui.advSalva') }}</button>

                </div>


            </form>
        </div>


    </div>






</section>

