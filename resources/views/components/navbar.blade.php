{{-- pulsante e home --}}
<nav class="container-fluid w-100 pt-0 mt-0 navbar z-3" role="navigation">

    <div class="row text-center w-100 align-items-center g-0">
        {{-- Sezione Sx --}}
        <div class="col-lg-5 col-md-5 d-none d-lg-block d-md-block d-xs-none ms-auto contenitore">
            <ul class="d-flex justify-content-around border-top border-bottom border-dark linea">
                <li class="customLink"><a class="d-inline-block p-3" href="{{ Route('home') }}">Home</a></li>
                <li class="customLink"><a class="d-inline-block p-3" href="{{Route('advertisement.index')}}">Annunci</a></li>


                <li class="customLink dropdown">
                    <a class="d-inline-block p-3 dropdown-toggle " href="#" id="categoriesDropdown"
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


            </ul>
        </div>
        {{-- sezione centrale --}}
        <div class="col-lg-2 col-md-2 mx-auto" style="max-width:120px;">
                 {{-- img gestita nel leyaut --}}
        </div>
        {{-- sezione Dx --}}
        <div class="col-lg-5 col-md-5 d-none d-lg-block d-md-block d-xs-none me-auto contenitore2">

            <ul class="d-flex justify-content-around border-top border-bottom border-dark linea">
                <li class="customLink"><a class="d-inline-block p-3" href="#">Contattaci</a></li>

                <li class="customLink"><a class="d-inline-block p-3" href="{{route('become.revisor')}}">Lavora con Noi</a></li>

                <!-- Aggiunto il div con la classe 'd-flex' per posizionare l'immagine e il testo sulla stessa riga -->
                <li class="customLink d-flex align-items-center">
                    <!-- Aggiunto il div con la classe 'round' per l'immagine dell'utente -->
                    <li class="round img-fluid"><img src="/Media/user.png" alt=""></li>
                    <!-- Aggiunto il testo "Benvenuto Utente" -->
                    <li class="customLink dropdown  ">
                        <a class="d-inline-block p-3 dropdown-toggle navbarColor" href="#" id="navbarDropdownMenuLink"
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
                </li>
            </ul>
        </div>


    </div>
</nav>
