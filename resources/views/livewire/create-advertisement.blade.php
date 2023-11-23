<section class="sezione2 tutto mt-5 pt-5">

    <div class="form-box">
        <div class="form-value">
            <form class="" wire:submit.privent="store">
                @csrf
                <h2 class="h2">Inserisci Annuncio</h2>
                @if (session('PostCreate'))
                    <div class="alert alert-success ">{{ session('PostCreate') }}</div>
                @endif
                {{-- Form title --}}
                <div class="inputbox">
                    <input type="text" wire:model.live='title' id="title">
                    <label for="title">Titolo annuncio</label>
                    @error('title')
                        <p class=" text-danger ">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Form password --}}
                <div class="inputbox">
                <ion-icon name="lock-closed-outline"><i class="fa-solid fa-eye see" onclick='seepassword()' style="color: #0b5fef;"></i></ion-icon>
                <input type="password" id="password" name="password">
                <label for="password">Password</label>
              </div>
                 {{-- Form description  --}}
                 <div class="inputbox">
                    <label  for="description"></label>

                    <textarea class="form-control border-0 " placeholder='Descrizione' id="description" cols="15" rows="6">{{ old('description') }}</textarea>


                    @error('description')
                        <p class="text-danger ">{{ $message }}</p>
                    @enderror

                </div>

                <button class="button" type="submit">Inserisci</button>

            </form>
        </div>
    </div>
</section>
