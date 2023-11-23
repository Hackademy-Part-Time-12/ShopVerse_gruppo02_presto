<section class="sezione2 primary tutto mt-5 pt-5">

    <div class="form-box">
        <div class="form-value">
            <form class="" wire:submit.prevent="store">
                @csrf
                <h2 class="h2">Inserisci Annuncio</h2>
                @if (session('PostCreate'))
                <p class="text-success ">{{ session('PostCreate') }}</p>
                @endif
                {{-- Form title --}}
                <div class="inputbox">
                    <input type="text" wire:model.live="title" id="title" @error('text') is-invalid @enderror>
                    <label for="title">Titolo annuncio</label>
                    @error('title')
                    <p class=" text-danger ">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Form prezzo --}}
                <div class="inputbox">
                    <input type="number" wire:model.live="price" id="price">
                    <label for="price">Price</label>
                </div>
                <div class="inputbox">

                    <select class="border-0 w-100 primary" wire:model.defer="category" id="category">
                        <option value="">Scegli la categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    @error('category')
                        <p class="text-danger ">{{ $message }}</p>
                    @enderror

                </div>
                {{-- Form body  --}}
                <div class="inputbox">
                    <label for="body"></label>
                    <textarea class="form-control border-0 " wire:model.live="body" @error('body') is-invalid @enderror
                        placeholder='Descrizione' id="body" cols="15" rows="6"></textarea>
                    @error('body')
                        <p class="text-danger ">{{ $message }}</p>
                    @enderror
                </div>

                <button class="button" type="submit">Inserisci</button>

            </form>
        </div>
    </div>
</section>
