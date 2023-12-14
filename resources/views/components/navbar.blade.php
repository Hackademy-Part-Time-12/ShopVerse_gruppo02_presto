
{{-- Sezione Ospite --}}

@guest
    {{-- Sezione SX --}}

    <a href="{{ route('home') }}">
        <div class="col-1 col-lg-2 position-fixed-md top-0 z-3 my-1">
            <img src="/Media/Logo_ShopVerse_02.svg" alt="" class="img-fluid">
        </div>
    </a>
    {{-- sezione Dx --}}
    <nav
        class="navbar z-1 position-absolute top-0 end-0 position-fixed mx-1 my-1 rounded-2 border border-primary navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid  ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item my-2">
                        <x-_locale lang="it" nation="it" />
                    </li>
                    <li class="nav-item my-2">
                        <x-_locale lang="fr" nation="fr" />
                    </li>
                    <li class="nav-item my-2">
                        <x-_locale lang="en" nation="gb" />
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link my-2" href="{{ route('advertisement.index') }}"><b class="navbarColor">{{__('ui.navAnnunci')}}</b> </a>
                    </li>

                    <li class="nav-item my-2">
                        <a class="nav-link" aria-current="page" href="{{ route('register') }}"><b class="navbarColor">
                                {{__('ui.btn')}}</b></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link my-2" href="{{ route('login') }}"><b class="navbarColor">{{__('ui.navAccedi')}}</b> </a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
@endguest


{{-- Sezione Autenticazione --}}
@auth
    {{-- Sezione SX --}}
    <a href="{{ route('home') }}">
        <div class="col-lg-2 col-3 position-fixed top-0 z-1 col-md-2 my-auto" style="max-width:150px;">
            <img src="/Media/Logo_ShopVerse_02.svg" alt="" class="img-fluid">
        </div>
    </a>
    {{-- sezione Dx --}}
    <nav
        class="navbar position-absolute top-0 end-0 z-1 position-fixed mx-1 my-1 rounded-2 border border-primary navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid  ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item mt-4">
                        <x-_locale lang="it" nation="it" />
                    </li>
                    <li class="nav-item mt-4">
                        <x-_locale lang="fr" nation="fr" />
                    </li>
                    <li class="nav-item mt-4">
                        <x-_locale lang="en" nation="gb" />
                    </li>
                    @if (Route::currentRouteName() == 'advertisement.create')
                        {{-- Sezione Categorie --}}
                        <li class="customLink dropdown">
                            <a class="nav-link dropdown-toggle mt-4 me-2 " href="#" id="categoriesDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <b class="navbarColor">{{__('ui.navCategorie')}}</b></a>

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
                    @else
                        <li class="customLink"><a class="d-inline-block my-3 p-3 text-decoration-none "
                                href="{{ Route('advertisement.create') }}"><b class="navbarColor">{{__('ui.btnLog')}}</b> </a>
                        </li>
                    @endif

                    @if (Route::currentRouteName() == 'advertisement.index')
                        {{-- Sezione Categorie --}}
                        <li class="customLink dropdown">
                            <a class="nav-link dropdown-toggle mt-4 me-2 " href="#" id="categoriesDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <b class="navbarColor">{{__('ui.navCategorie')}}</b></a>

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
                    @else
                        <li class="customLink"><a class="d-inline-block my-3 me-3 pt-3 text-decoration-none "
                                href="{{ Route('advertisement.index') }}"><b class="navbarColor">{{__('ui.navAnnunci')}}</b> </a>
                        </li>
                    @endif

                    @if (Route::currentRouteName() == 'profile.index')
                        @if (Auth::User()->is_revisor)
                        <ul class="customLink  position-relative">
                            <a href="{{ route('revisor.index') }}" class="text-decoration-none mt-4 pt-2 me-4">
                          <b class="navbarColor">{{__('ui.btnRevisore')}}</b>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{ App\Models\Advertisement::toBeRevisionedCount() }}
                              <span class="visually-hidden">Messaggi non Letti</span>
                            </span>
                        </a>
                        </ul>
                        @endif
                    @endif




                        <!-- Aggiunto il div con la classe 'round' per l'immagine dell'utente -->

                        <!-- Aggiunto il testo "Benvenuto Utente" -->
                    <li class="customLink dropdown mt-2 ">
                        <a class="nav-link mt-3 dropdown-toggle fw-bold " href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <b class="navbarColor">{{ Auth::user()->name }}</b>
                        </a>

                        <ul class="dropdown-menu  " aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item fw-bold" href="{{ route('profile.index') }}">{{__('ui.btnProfilo')}}</a>
                            </li>




                            <li>
                                <a class="dropdown-item fw-bold" id="btn" href="#">Logout</a>
                            </li>

                            <form action="{{ route('logout') }}" method="POST" id="form">
                                @csrf
                            </form>

                        </ul>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

@endauth

