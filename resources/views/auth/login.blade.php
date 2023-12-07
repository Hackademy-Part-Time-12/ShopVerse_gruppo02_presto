<x-layout>


        <section class="sezione tutto ">

            <div class="form-box">
                <div class="form-value">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <h2 class="h2">Accedi</h2>
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="email" name="email" id="email" value="{{ old('email') }}">
                            <label for="email">Email</label>
                            @error('email')
                                <p class=" text-danger ">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"><i class="fa-solid fa-eye see" onclick='vedipassword()'
                                    style="color: #0b5fef;"></i></ion-icon>
                            <input type="password" id="password" name="password">
                            <label for="password">Password</label>
                            @error('password')
                                <p class=" text-danger ">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="forget">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="remember" id="remember">
                                <label class="form-check-label" for="remember">Ricordami</label>
                            </div>
                            <a href="#">Password dimenticata?</a>
                            </label>
                        </div>
                        <button class="button" type="submit">Log in</button>
                        <div class="register">
                            <p>Non hai un Account ? <a href="{{ route('register') }}">Registrati</a></p>
                        </div>
                    </form>
                </div>
            </div>
    
</x-layout>

