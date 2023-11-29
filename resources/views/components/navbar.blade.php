    <div class="container-fluid w-100 pt-0 mt-0 navbar z-3" role="navigation">
        @auth
            <div class="row text-center w-100 align-items-center g-0">
                {{-- Sezione SX --}}
                <div class="col-lg-5 col-md-5 d-none d-lg-block d-md-block d-xs-none ms-auto">
                    <div class="d-flex justify-content-around border-top border-bottom border-dark linea">
                        {{-- Home --}}
                        <div class="customLink">
                            <a class="d-inline-block p-3" href="{{ Route('home') }}"><b class="navbarColor">Home</b> </a>
                        </div>
                        {{-- Annunci --}}
                        <div class="customLink">
                            <a class="d-inline-block p-3" href="{{ route('advertisement.index') }}"><b
                                    class="navbarColor">Annunci</b></a>
                        </div>
                        {{-- inserisci annunci --}}
                        <div class="customLink">
                            <a class="d-inline-block p-3" href="{{ route('advertisement.create') }}"><b
                                    class="navbarColor">Inserisci Annunci</b> </a>
                        </div>

                    </div>
                </div>

                {{-- Sezione centrale --}}
                <div class="col-lg-2 col-md-2 mx-auto" style="max-width:120px;">
                    {{-- foto gestita nel leyout --}}

                </div>

                {{-- Sezione DX --}}
                <div class="col-lg-5 col-md-5 d-none d-lg-block d-md-block d-xs-none me-auto">
                    <div class="d-flex justify-content-around border-top border-bottom border-dark linea">

                        {{-- Sezione Categorie --}}
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" id="categoriesDropdown" role="button"
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

                        {{-- Contattaci --}}
                        <div class="customLink">
                            <a class="d-inline-block p-3" href="#"><b class="navbarColor">Contattaci</b> </a>

                        </div>
                        {{-- Sezione visione loggato --}}
                        <li class="nav-item dropdown fw-bold">
                            <a class="nav-link dropdown-toggle fw-bold " href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <b class="navbarColor">{{ Auth::user()->name }}</b>
                            </a>

                            <ul class="dropdown-menu  " aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item fw-bold" href="login.html">Profilo</a></li>
                                @if (Auth::User()->is_revisor)
                                    <li><a class="dropdown-item fw-bold" href="{{ route('revisor.index') }}">Zona
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
                    </div>
                </div>
            </div>

        @endauth

        @guest
            <div class="row text-center w-100 align-items-center g-0">
                <div class="col-lg-5 col-md-5 d-none d-lg-block d-md-block d-xs-none ms-auto">
                    <div class="d-flex justify-content-around border-top border-bottom border-dark linea">
                        {{-- Home --}}
                        <div class="customLink">
                            <a class="d-inline-block p-3" href="{{ Route('home') }}"><b class="navbarColor">Home</b> </a>
                        </div>
                        {{-- Annunci --}}
                        <div class="customLink"><a class="d-inline-block p-3"
                                href="{{ route('advertisement.index') }}"><b class="navbarColor">Annunci</b> </a>
                        </div>
                        {{-- Categorie --}}

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="#" id="categoriesDropdown" role="button"
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





                    </div>
                </div>

                {{-- Sezione centro --}}
                <div class="col-lg-2 col-md-2 mx-auto" style="max-width:120px;">
                    {{-- immagine gestita con leyout --}}

                </div>

                {{-- Sezione dx --}}
                <div class="col-lg-5 col-md-5 d-none d-lg-block d-md-block d-xs-none me-auto">
                    <div class="d-flex justify-content-around border-top border-bottom border-dark linea">

                        {{-- Contattaco --}}
                        <div class="customLink">
                            <a class="d-inline-block p-3" href="#"><b class="navbarColor">Contattaci</b> </a>
                        </div>

                        {{-- Benvenuto utente --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-bold dropdown-toggle navbarColor" href="#"
                                id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <b class="navbarColor">Benvenuto Utente</b>

                            </a>

                            <ul class="dropdown-menu  " aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item fw-bold " href="{{ route('login') }}">Login</a>
                                </li>
                                <li><a class="dropdown-item fw-bold" href="{{ Route('register') }}">Registrati</a></li>
                                <!-- <li><a class="dropdown-item" href="#">Contact us</a></li> -->
                            </ul>
                        </li>

                    </div>
                </div>
            </div>
        @endguest

    </div>
