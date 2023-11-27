
    {{-- pulsante e home --}}
    <div class="navbar-expand-md z-3 mukta" id="mainNavigation">
        <nav role="navigation" class="mx-auto" id="nav">
            <div class="py-3 text-center logo" id="logo">
                <img src="\Media\Logo_ShopVerse_02.svg" class="" width="200" height="100">
            </div>

            <div class=" text-center my-2">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span> <span class="align-middle">Menu</span>
                </button>
            </div>

        </nav>
        <div class="text-center my-3 collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto ">



                {{-- Home --}}
                <li class="nav-item">
                    <a class="nav-link fw-bold navbarColor" href="{{ Route('home') }}">Home</a>
                </li>
                {{-- Categorie --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="categoriesDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <li class="nav-item">
                    <a class="nav-link navbarColor fw-bold" href="{{route('advertisement.index')}}">Annunci</a>
                </li>

                {{-- CHI siamo --}}
                @guest
                    <li class="nav-item">
                        <a class="nav-link navbarColor fw-bold" href="#">Chi Siamo</a>
                    </li>
                    {{-- Contattaci --}}
                    <li class="nav-item">
                        <a class="nav-link navbarColor fw-bold" href="#">Contattaci</a>
                    </li>
                    {{-- Benvenuto utente --}}
                    <li class="nav-item dropdown  ">
                        <a class="nav-link fw-bold dropdown-toggle navbarColor" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <b class="navbarColor">Benvenuto Utente</b>

                        </a>

                        <ul class="dropdown-menu  " aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item fw-bold " href="{{ route('login') }}">Login</a>
                            </li>
                            <li><a class="dropdown-item fw-bold"
                                    href="{{ Route('register') }}">Registrati</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Contact us</a></li> -->
                        </ul>
                    </li>


                @endguest

                @auth
                    <li class="nav-item">
                        <a class="nav-link navbarColor fw-bold" href="{{ route('advertisement.create') }}">Inserisci
                            annunci</a>
                    </li>

                    {{-- Chi siamo --}}
                    <li class="nav-item">
                        <a class="nav-link navbarColor fw-bold" href="#">Chi Siamo</a>
                    </li>
                    {{-- Contattaci --}}
                    <li class="nav-item">
                        <a class="nav-link navbarColor fw-bold" href="#">Contattaci</a>
                    </li>
                    {{-- Sezione visione loggato --}}
                    <li class="nav-item dropdown fw-bold">
                        <a class="nav-link dropdown-toggle fw-bold " href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <b class="navbarColor">{{ Auth::user()->name }}</b>
                        </a>

                        <ul class="dropdown-menu  " aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item fw-bold" href="login.html">Profilo</a></li>
                            @if(Auth::User()->is_revisor)
                            <li><a class="dropdown-item fw-bold"  href="{{route('revisor.index')}}">Zona Revisore</a>
                            </li>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{app\Models\Advertisement::toBeRevisionedCount()}}
                               
                                <span class="visually-hidden">Messaggi non letti</span> 
                            </span>
                            @endif
                            <li><a class="dropdown-item fw-bold" id="btn" href="#">logout</a>
                            </li>
                            <form action="{{ route('logout') }}" method="POST" id="form">
                                @csrf
                            </form>
                            <!-- <li><a class="dropdown-item" href="#">Contact us</a></li> -->
                        </ul>
                    </li>

                @endauth

            </ul>
        </div>


    </div>

