



    <div id="mainNavigation" class="z-3 ">
        
        {{-- pulsante e home --}}
        <div class="navbar-expand-md mukta">
            <div class="navbar-dark text-center my-2">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span> <span class="align-middle">Menu</span>
                </button>
            </div>
            <nav role="navigation" class="mx-auto" id="nav" style="height: 15vh;">
              <div class="py-3 text-center logo" id="logo">
                <img src="\Media\logo.svg"
                  class="max-width-100 foto" width="200" height="100">
              </div>
            </nav>
            <div class="text-center d-flex my-3 collapse navbar-collapse" id="navbarNavDropdown" style="height: 4vh;">
                <ul class="navbar-nav mx-auto ">


                    @guest
                    {{-- Home --}}
                    <li class="nav-item">
                        <a class="nav-link text-primary fw-bolder" href="{{ Route('home') }}">Home</a>
                    </li>
                    {{-- Chi siamo --}}
                    <li class="nav-item">
                        <a class="nav-link text-primary fw-bolder" href="#">Chi Siamo</a>
                    </li>
                    {{-- Contattaci --}}
                    <li class="nav-item">
                        <a class="nav-link text-primary fw-bolder" href="#">Contattaci</a>
                    </li>
                        {{-- Benvenuto utente --}}
                        <li class="nav-item dropdown  ">
                            <a class="nav-link dropdown-toggle text-primary  " href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <p class="text-primary">Benvenuto Utente</p>
                            </a>

                            <ul class="dropdown-menu bg-light " aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item text-primary fw-bolder" href="{{ route('login') }}">Login</a>
                                </li>
                                <li><a class="dropdown-item text-primary fw-bolder"
                                        href="{{ Route('register') }}">Registrati</a></li>
                                <!-- <li><a class="dropdown-item" href="#">Contact us</a></li> -->
                            </ul>
                        </li>

                    @endguest

                    @auth
                    <li class="nav-item">
                        <a class="nav-link text-primary fw-bolder" href="{{ Route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary fw-bolder" href="{{ route('advertisement.create') }}">Inserisci annunci</a>
                    </li>
                    {{-- Chi siamo --}}
                    <li class="nav-item">
                        <a class="nav-link text-primary fw-bolder" href="#">Chi Siamo</a>
                    </li>
                    {{-- Contattaci --}}
                    <li class="nav-item">
                        <a class="nav-link text-primary fw-bolder" href="#">Contattaci</a>
                    </li>
                        {{-- Sezione visione loggato --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-primary  " href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <p class="text-primary fs-6">{{ Auth::user()->name }}</p>
                            </a>

                            <ul class="dropdown-menu bg-light " aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item text-primary fw-bolder" href="login.html">Profilo</a></li>
                                <li><a class="dropdown-item text-primary fw-bolder" id="btn" href="#">logout</a>
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
    </div>

