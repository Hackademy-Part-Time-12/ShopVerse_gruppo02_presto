@guest
    <nav class="container-fluid w-100 pt-0 mt-0 navbar z-3" role="navigation">

        <div class="row text-center w-100 align-items-center g-0">
            {{-- Sezione SX --}}
            <div class="col-lg-5 col-md-5 d-none d-lg-block d-md-block d-xs-none ms-auto shadow contenitore">

                <ul class="d-flex justify-content-around mt-3 linea">
                    <li class="customLink"><a class="d-inline-block p-3" href="{{ Route('home') }}">Home</a></li>
                    <li class="customLink"><a class="d-inline-block p-3" href="{{ Route('advertisement.index') }}">Annunci</a>
                    </li>
                    <li class="customLink dropdown">
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


                </ul>
            </div>

            {{-- sezione centrale --}}
            <div class="col-lg-2 col-md-2 mx-auto shadow" style="max-width:120px;">
                {{-- img gestita nel layout --}}
            </div>
            {{-- Sezione DX --}}

            <div class="col-lg-5 col-md-5 d-none d-lg-block d-md-block d-xs-none me-auto shadow  contenitore2">


                <ul class="d-flex justify-content-around mt-3 linea">
                    <li class="customLink"><a class="d-inline-block p-3" href="#">Contattaci</a></li>

                    <li class="customLink ms-2"><a class="d-inline-block p-3"
                            href="{{ route('become.revisor') }}">Lavora</a>
                    </li>

                    <!-- Aggiunto il div con la classe 'd-flex' per posizionare l'immagine e il testo sulla stessa riga -->
                    <li class="customLink d-flex align-items-center">
                        <!-- Aggiunto il div con la classe 'round' per l'immagine dell'utente -->

                        <!-- Aggiunto il testo "Benvenuto Utente" -->
                    <li class="customLink dropdown  ">
                        <img class="round ms-o img-fluid" src="/Media/user.png" alt="">
                        <a class="d-inline-block p-3 dropdown-toggle navbarColor" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <b class="navbarColor">Benvenuto</b>

                        </a>

                        <ul class="dropdown-menu  " aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item fw-bold " href="{{ route('login') }}">Login</a>
                            </li>
                            <li><a class="dropdown-item fw-bold" href="{{ Route('register') }}">Registrati</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Contact us</a></li> -->
                        </ul>
                    </li>
                    </li>
                </ul>
            </div>


        </div>
    </nav>
@endguest
{{-- Sevione Autenticazione --}}
@auth
    <nav class="container-fluid w-100 pt-0 mt-0 navbar z-3" role="navigation">

        <div class="row text-center w-100 align-items-center g-0">
            {{-- Sezione SX --}}
            <div class="col-lg-5 col-md-5 d-none d-lg-block d-md-block d-xs-none ms-auto shadow contenitore">

                <ul class="d-flex justify-content-around mt-3 linea">
                    <li class="customLink"><a class="d-inline-block p-3" href="{{ Route('home') }}"><b
                                class="navbarColor">Home</b> </a></li>
                    <li class="customLink"><a class="d-inline-block p-3" href="{{ Route('advertisement.index') }}"><b
                                class="navbarColor">Annunci</b> </a>
                    </li>
                    <li class="customLink dropdown">
                        <a class="d-inline-block p-3 dropdown-toggle " href="#" id="categoriesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <b class="navbarColor">Categorie</b></a>

                        <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item  "
                                        href=" {{ route('categoryShow', compact('category')) }} ">{{ $category->name }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider navbarColor">
                                </li>
                            @endforeach
                        </ul>
                    </li>


                </ul>
            </div>

            {{-- sezione centrale --}}
            <div class="col-lg-2 col-md-2 mx-auto shadow" style="max-width:120px;">

            </div>
            {{-- Sezione DX --}}

            <div class="col-lg-5 col-md-5 d-none d-lg-block d-md-block d-xs-none me-auto shadow  contenitore2">


                <ul class="d-flex justify-content-around mt-3 linea">
                    <li class="customLink"><a class="d-inline-block p-3"
                            href="{{ Route('advertisement.create') }}">Inserisci annunci</a></li>
                    <li class="customLink"><a class="d-inline-block p-3" href="#">Contattaci</a></li>

                    <li class="customLink ms-2"><a class="d-inline-block p-3"
                            href="{{ route('become.revisor') }}">Lavora</a>
                    </li>

                    <!-- Aggiunto il div con la classe 'd-flex' per posizionare l'immagine e il testo sulla stessa riga -->
                    <li class="customLink d-flex align-items-center">
                        <!-- Aggiunto il div con la classe 'round' per l'immagine dell'utente -->

                        <!-- Aggiunto il testo "Benvenuto Utente" -->
                    <li class="customLink dropdown  ">
                        <img class="round ms-0 me-2 img-fluid" src="/Media/user.png" alt="">
                        <a class="nav-link dropdown-toggle fw-bold " href="#" id="navbarDropdownMenuLink"
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
                            <!-- <li><a class="dropdown-item" href="#">Contact us</a></li> -->
                        </ul>
                    </li>
                    </li>
                </ul>
            </div>


        </div>
    </nav>
@endauth
