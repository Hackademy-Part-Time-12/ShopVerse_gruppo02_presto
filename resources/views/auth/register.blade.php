<x-layout>

    <x-navbar />
        <section class="sezione tutto mt-5 pt-5">
            <link rel="stylesheet" href="register.css">
            <div class="form-box">
                <div class="form-value">
                    <form class="" action="{{ route('register') }}" method="POST">
                        @csrf
                        <h2 class="h2">Registrati</h2>
                        {{-- Form name --}}
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>

                            <input type="text" name="name" id="name" value="{{ old('name') }}">

                            <label for="name">Username</label>
                            @error('name')
                                <p class=" text-danger ">{{ $message }}</p>
                            @enderror
                        </div>

                        {{--  --}}

                        {{-- Form email  --}}
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="email" name="email" id="email" value="{{ old('email') }}">
                            <label for="email">Email</label>
                            @error('email')
                                <p class="text-danger ">{{ $message }}</p>
                            @enderror

                        </div>
                        {{--  --}}

                        {{-- Form password --}}
                        <div class="inputbox">
                        <ion-icon name="lock-closed-outline"><i class="fa-solid fa-eye see" onclick='seepassword()' style="color: #0b5fef;"></i></ion-icon>
                        <input type="password" id="password" name="password">
                        <label for="password">Password</label>
                      </div>
                        {{--  --}}

                        {{-- Form Confirmed password --}}
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"><i class="fa-solid fa-eye see" onclick='seeconfirmpassword()' style="color: #0b5fef;" style="cursor:pointer;"></i></ion-icon>
                            <input type="password" id="password_confirmation" name="password_confirmation" >
                            <label for="password_confirmation">Confirm Password</label>
                          </div>
                        {{--  --}}

                        {{-- Footer register --}}
                        <div class="forget">
                            <label>
                                <a href="#">Hai dimenticato la Password?</a>
                            </label>
                        </div>
                        <button class="button" type="submit">Registrati</button>
                        <div class="register">
                            <p class="fw-bold">Hai gia un Account? <a href="{{ Route('login') }}">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>


</x-layout>
