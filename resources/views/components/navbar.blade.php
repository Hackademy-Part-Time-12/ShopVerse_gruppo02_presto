@guest
    {{-- Sezione SX --}}

    <a href="{{ route('home') }}">
        <div class="col-lg-2 position-fixed top-0  col-md-2 my-auto" style="max-width:150px;">
            <img src="/Media/Logo_ShopVerse_02.svg" alt="" class="img-fluid">
        </div>
    </a>
    {{-- sezione Dx --}}
    <nav class="navbar z-1 position-absolute top-0 end-0 position-fixed mx-1 my-1 rounded-2 border border-primary navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid  ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item my-2">
                        <a class="nav-link" aria-current="page" href="{{ route('register') }}"><b class="navbarColor">
                                Registrati</b></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link my-2" href="{{ route('login') }}"><b class="navbarColor">Accedi</b> </a>
                    </li>
                    <li class="customLink d-flex align-items-center">
                        <!-- Aggiunto il div con la classe 'round' per l'immagine dell'utente -->

                        <!-- Aggiunto il testo "Benvenuto Utente" -->
                    <li class="customLink dropdown  ">
                        <img class="round ms-o img-fluid" src="/Media/user.png" alt="">
                    <li class="nav-item mx-2">
                        <b class="nav-link fw-bold my-2 navbarColor">Benvenuto Utente</b>

                    </li>

                </ul>
            </div>
        </div>
    </nav>
@endguest


{{-- Sevione Autenticazione --}}
@auth
    <a href="{{ route('home') }}">
        <div class="col-lg-2 position-fixed top-0  col-md-2 my-auto" style="max-width:150px;">
            <img src="/Media/Logo_ShopVerse_02.svg" alt="" class="img-fluid">
        </div>
    </a>
    {{-- sezione Dx --}}
    <nav
        class="navbar position-absolute top-0 end-0 position-fixed mx-1 my-1 rounded-2 border border-primary navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid  ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="customLink dropdown my-3">
                        <a class="d-inline-block p-3 dropdown-toggle " href="#" id="categoriesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <b class="navbarColor">Categorie</b></a>

                        <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item  "
                                        href=" {{ route('categoryShow', compact('category')) }} ">{{ $category->name }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="customLink"><a class="d-inline-block my-3 p-3" href="{{ Route('advertisement.index') }}"><b
                                class="navbarColor">Annunci</b> </a>
                    </li>

                    <li class="customLink d-flex align-items-center">
                        <!-- Aggiunto il div con la classe 'round' per l'immagine dell'utente -->

                        <!-- Aggiunto il testo "Benvenuto Utente" -->
                    <li class="customLink dropdown  ">
                        <img class="round mt-4 me-1 img-fluid" src="/Media/user.png" alt="">
                        <a class="nav-link mt-3 dropdown-toggle fw-bold " href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <b class="navbarColor">{{ Auth::user()->name }}</b>
                        </a>

                        <ul class="dropdown-menu  " aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item fw-bold" href="login.html">Profilo</a></li>
                            @if (Auth::User()->is_revisor)
                                <li>
                                    <a class="dropdown-item fw-bold" href="{{ route('revisor.index') }}">Zona
                                        Revisore</a>
                                </li>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ App\Models\Advertisement::toBeRevisionedCount() }}

                                    <span class="visually-hidden">Messaggi non letti</span>
                                </span>
                            @endif
                            <li><a class="dropdown-item fw-bold" id="btn" href="#">logout</a>
                            </li>
                            <form action="{{ route('logout') }}" method="POST" id="form">
                                @csrf
                            </form>

                        </ul>

                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

@endauth
